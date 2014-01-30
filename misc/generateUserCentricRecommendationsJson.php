<?php

/*
 *  Josip Žemberi, siječanj 2014.
 */

// make array from csv
//$fp = fopen("./../data/prefs_sorted.csv", "r"); // csv needs to be sorted!
// reason csv needs to be sorted by first field (user id) is so that same 
// user_id comes one after another..
$fp = fopen("./../data/prefs_sorted_test.csv", "r"); // csv needs to be sorted!

$results = array();

$previous_user_id = null;

while ($rec = fgetcsv($fp)) {
    if ($previous_user_id != $rec[0]) {
        $previous_user_id = $rec[0];
        $results[$previous_user_id] = array();
    }
    
    $results[$previous_user_id][$rec[1]] = $rec[2];
}

// example array:
// $a = array(
//          [user_id] = array(
//                  [movie_id_1] => rating_1,
//                  [movie_id_2] => rating_2,
//                  ...
//                  )
// );

//$json_file_name = './../data/user_centric_recommendations_model.json';
$json_file_name = './../data/user_centric_recommendations_model_test.json';

file_put_contents($json_file_name, json_encode($results));

echo  $json_file_name . ' created!';
