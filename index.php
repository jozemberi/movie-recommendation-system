<?php

session_start();

// CHOOSE TEST or REAL MODEL to LOAD
$rec_data_file = file_get_contents("./data/user_centric_recommendations_model_test.json");
//$rec_data_file = file_get_contents("./data/user_centric_recommendations_model.json");

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
$page_name = 'index';
$lang =  $_SESSION['visitor_lang'];
$lang_file = 'lang/' . $lang . '/' . $page_name . '.conf';

// load info about movies
$string = file_get_contents("./data/movies_info.json");
$movies_data = json_decode($string, true);

$total_records = sizeof($movies_data); // total number of results (movies) = 1682
$per_page = 10; //how many per page

$total_pages = ceil($total_records / $per_page);

$page = 1;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ((!is_numeric($page)) || $page > $total_pages || $page < 1) {
        // invalid page number control
        $page = 1;
    }
}

// load recommendation data
$recommendation_data = json_decode($rec_data_file, true);


$re = new Recommender();
$recommendation_results = $re->getRecommendations($recommendation_data, $_SESSION['visitor_taste']);

$total_recommendation_records = sizeof($recommendation_results);

$per_recommendation_page = 10;
$total_recommendation_pages = ceil($total_recommendation_records / $per_recommendation_page);

$recommendation_page = 1;

if (isset($_GET['r_page'])) {
    $recommendation_page = $_GET['r_page'];
    if ((!is_numeric($recommendation_page)) ||
            $recommendation_page > $total_recommendation_pages || 
            $recommendation_page < 1) {
        // invalid recommendation page number control
        $recommendation_page = 1;
    }
}

$recommendation_offset = ($recommendation_page - 1) * $per_recommendation_page;

$preserve_keys = true; // important because keys are id-s

// get array with recommendations that will be shown
$show_recommendations = array_slice($recommendation_results, 
        $recommendation_offset, $per_recommendation_page, $preserve_keys);

// configure recommendation pagination
$r_pagination['curPage'] = $recommendation_page;
$r_pagination['url'] = 'index.php?page=' . $page . '&amp;r_page=%x';
$r_pagination['totalPages'] = $total_recommendation_pages;


$offset = ($page - 1) * $per_page;
if ($page == $total_pages) { // last page case
    $per_page = $total_records - (($total_pages - 1) * $per_page);
}
$length = $per_page / 2; // how much from offset to splice (two boxes case)

// slice movies_data array in two, one for left box, one for center
$movies_info_left_box = array_slice($movies_data, $offset, $length, $preserve_keys);
$movies_info_center_box = array_slice($movies_data, $offset + $length, $length, $preserve_keys);

// configure movies pagination
$pagination['curPage'] = $page;
$pagination['url'] = 'index.php?page=%x&amp;r_page=' . $recommendation_page;
$pagination['totalPages'] = $total_pages;
$change_lang_url = 'index.php?page=' . $page . '&amp;r_page=' . $recommendation_page;

$smarty = new Smarty();

$smarty->assign('page_title', ''); // default title is loaded from config file for index.php...
// but this still have to be set to some value..

$smarty->assign('lang_file', $lang_file);
$smarty->assign('lang', $lang);
$smarty->assign('change_lang_url', $change_lang_url);

// fill left box with movie info
$smarty->assign('movies_info_left_box', $movies_info_left_box);

// fill center box with movie info
$smarty->assign('movies_info_center_box', $movies_info_center_box);

// for case that there is no movie info data, only movie title
$smarty->assign('movies_basic_data', $movies);

// content pagination
$smarty->assign('pagination', $pagination);

// recommendation pagination
$smarty->assign('r_pagination', $r_pagination);

$smarty->assign('show_recommendations', $show_recommendations);

$smarty->assign('liked_movies', $_SESSION['visitor_taste']);

$smarty->display('index.tpl');
