<?php

/*
 *  Josip Žemberi, siječanj 2014.
 */

require_once './../data/movies_array.php';
require_once './../helpers/curl_download.php';

$movies_with_data = array();

foreach ($movies as $key => $value) {
    if (strpos($value, ', The') !== false) {
        $value = str_replace(', The', '', $value);
        $value = 'The ' . $value;
    } else if(strpos($value, ', A') !== false){
        $value = str_replace(', A', '', $value);
        $value = 'A ' . $value;
    } else if (strpos($value, ', Der') !== false){
        $value = str_replace(', Der', '', $value);
        $value = 'Der ' . $value;
    } else if (strpos($value, ', Il') !== false){
        $value = str_replace(', Il', '', $value);
        $value = 'Il ' . $value;
    }
    
    $movie_name = urlencode($value);
    $json_url = 'http://www.omdbapi.com/?t=' . $movie_name;

    $data = curl_download($json_url);
    $json = json_decode($data, true);
    $movies_with_data[$key] = $json;
}

$json_file_name = './../data/movies_info_new.json';

file_put_contents($json_file_name, json_encode($movies_with_data));

echo $json_file_name . ' created!';