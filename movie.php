<?php

session_start();

// CHOOSE TEST or REAL MODEL to LOAD
$rec_data_file = file_get_contents("./data/movie_centric_recommendations_model_test.json");
//$rec_data_file = file_get_contents("./data/movie_centric_recommendations_model.json");


require_once './helpers/smarty.php';
require_once './data/movies_array.php';
require_once './helpers/curl_download.php';
require_once './helpers/recommender.php';

if (!isset($_SESSION['visitor_taste'])) {
    $_SESSION['visitor_taste'] = array();
}

if (!isset($_SESSION['visitor_lang'])) {
    $_SESSION['visitor_lang'] = 'hr';
}

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if ( $lang === 'hr' ||  $lang === 'en') {
       $_SESSION['visitor_lang'] = $lang;
    }
}

// for localization (web page language)
$page_name = 'movie';
$lang = $_SESSION['visitor_lang'];
$lang_file = 'lang/' . $lang . '/' . $page_name . '.conf';

// load info about movies
$string = file_get_contents("./data/movies_info.json");
$movies_data = json_decode($string, true);

$max_movie_id = 1682;

$from_db = "True"; // movie info is from my 'db'(json file)

if (isset($_GET['id'])) {
    $id = $_GET['id']; // access movie info through movie id
} else if (isset($_GET['name'])) {
    $name = $_GET['name']; // access movie info through movie name
    // search for id by movie name

    $id = array_search(strtolower($name), array_map('strtolower', $movies));

    if ($id === false) { // id is not found
        // get movie info from web service
        $movie_name = urlencode($name);
        $json_url = 'http://www.omdbapi.com/?t=' . $movie_name;

        $data = curl_download($json_url);
        $json = json_decode($data, true);
        $movie_info = $json;
        $movie_title = $name;

        $from_db = "False"; // movie info is from web service
    }
} else {
    header('Location: index.php'); // go to hompepage hacker you
}

if ((!is_numeric($id)) || $id > $max_movie_id || $id < 1) {
    if ($id === false) {
        $show_recommendations = array();
        $r_pagination = array();

        $r_pagination['curPage'] = 1;
        $r_pagination['url'] = '';
        $r_pagination['totalPages'] = 0;
        $change_lang_url = 'movie.php?name=' . $name;
    } else {
        header('Location: index.php'); // go to hompepage hacker you
    }
} else { // fill fields with data
    $_SESSION['visitor_taste'][$id] = 5; // give highest score

    $movie_title = $movies[$id]; // basic info contains only movie id and title.
    $movie_info = $movies_data[$id];

    $recommendation_data = json_decode($rec_data_file, true);
     

    $re = new Recommender();
    $r_results = $re->recommendMovies($recommendation_data, $id);
    
    // remove allready liked (seen) movies
    $recommendation_results = array_diff_key($r_results, $_SESSION['visitor_taste']);

    $per_recommendation_page = 10;

    $total_recommendation_records = sizeof($recommendation_results);

    $total_recommenation_pages = ceil($total_recommendation_records / $per_recommendation_page);

    $recommendation_page = 1;

    if (isset($_GET['r_page'])) {
        $recommendation_page = $_GET['r_page'];
        if ((!is_numeric($recommendation_page)) ||
                $recommendation_page > $total_recommenation_pages || $recommendation_page < 1) {
            $recommendation_page = 1;
        }
    }

    $recommendation_offset = ($recommendation_page - 1) * $per_recommendation_page;

    $preserve_keys = true;
    $show_recommendations = array_slice($recommendation_results, 
            $recommendation_offset, $per_recommendation_page, $preserve_keys);

    $r_pagination['curPage'] = $recommendation_page;
    $r_pagination['url'] = 'movie.php?id=' . $id . '&amp;r_page=%x';
    $r_pagination['totalPages'] = $total_recommenation_pages;
    $change_lang_url = 'movie.php?id=' . $id . '&amp;r_page=' . $r_pagination['curPage'];
}

$smarty = new Smarty();
$smarty->assign('page_title', $movie_title);
$smarty->assign('lang_file', $lang_file);
$smarty->assign('lang', $lang);
$smarty->assign('change_lang_url', $change_lang_url);

// fill center box with movie info
$smarty->assign('movie', $movie_info);
$smarty->assign('movie_title', $movie_title);
$smarty->assign('movies_basic_data', $movies);
$smarty->assign('from_db', $from_db);

$smarty->assign('show_recommendations', $show_recommendations);

// recommendation pagination
$smarty->assign('r_pagination', $r_pagination);

// for button <3 on right footer
$smarty->assign('liked_movies', $_SESSION['visitor_taste']);

$smarty->display('movie.tpl');
