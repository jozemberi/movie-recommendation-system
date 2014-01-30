<?php

/*
 *  Josip Žemberi, siječanj 2014.
 */


//$rec_data_file = file_get_contents("./../data/user_centric_recommendations_model.json");
$rec_data_file = file_get_contents("./../data/user_centric_recommendations_model_test.json");
$recommendation_data = json_decode($rec_data_file, true);

$results = array();

foreach ($recommendation_data as $user => $values) {
    foreach ($values as $key => $value) {
        $results[$key][$user] = $value;
    }
}

// example array:
// $a = array(
//          [movie_id] = array(
//                  [user_id_1] => rating_1,
//                  [user_id_2] => rating_2,
//                  ...
//                  )
// );

//$json_file_name = './../data/movie_centric_recommendations_model.json';
$json_file_name = './../data/movie_centric_recommendations_model_test.json';

file_put_contents($json_file_name, json_encode($results));

echo  $json_file_name . ' created!';

