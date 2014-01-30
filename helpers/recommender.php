<?php

/*
 *  Josip Žemberi, siječanj 2014.
 */

/**
 * Recommends movies using Euclidean distance.
 */
class Recommender {

    /**
     * Calculates similarity beetween 2 objects.
     * 
     * @param array $recommendation_model Contains user-movie-rating or movie-user-rating
     * @param int $id User or movie id
     * @param array/int $r_base 
     * @return float Number from 0 (min) to 1 (max) that represents similarity
     */
    public function similarity($recommendation_model, $id, $r_base) {
        if (is_numeric($r_base)) { // $r_base is id
            if (array_key_exists($r_base, $recommendation_model)) {
                $r_base_array = $recommendation_model[$r_base]; //
            } else {
                return 0;
            }
        } else {
            $r_base_array = $r_base; // $r_base is allready array
        }
        // find 'shared' movies/users
        $similarity = array_keys(array_intersect_key($recommendation_model[$id], $r_base_array));

        // if there are none, return 0
        if (count($similarity) === 0) {
            return 0;
        }
        $sum_of_squares = 0;

        foreach ($similarity as $item) {
            $sum_of_squares += pow($recommendation_model[$id][$item] - $r_base_array[$item], 2);
        }

        return 1 / (1 + sqrt($sum_of_squares));
    }

    /**
     * Recommends movie based on movie centric array (recommendation model).
     * Movie centric means that movies contains users and their ratings for it.
     * 
     * @param array $recommendation_model Movie centric array 
     * @param int $movie_id Id of a movie that is base for recommendation
     * @return array Recommendations with simularity scores (0-1)
     */
    public function recommendMovies($recommendation_model, $movie_id) {
        $recs = array();

        foreach ($recommendation_model as $db_movie_id => $value) {
            if ($db_movie_id !== $movie_id) {
                $sim = $this->similarity($recommendation_model, $db_movie_id, $movie_id);

                if ($sim > 0) {
                    $recs[$db_movie_id] = $sim;
                }
            }
        }

        uasort($recs, array($this, 'cmp'));
        return $recs;
    }

    /**
     * 
     * @param array $recommendation_model Model used to calculate simularity.
     * @param array $r_base Base for recommendation.
     * @return array Movie recommendations.
     */
    public function getRecommendations($recommendation_model, $r_base) {
        $total = array();
        $sim_sums = array();
        $ranks = array();
        $sim = 0;

        if (is_numeric($r_base)) {
            $r_base_array = $recommendation_model[$r_base];
        } else {
            $r_base_array = $r_base;
        }

        foreach ($recommendation_model as $id => $value) {
            if ($id != $r_base) {
                $sim = $this->similarity($recommendation_model, $id, $r_base_array);
            }

            if ($sim > 0) {
                foreach ($recommendation_model[$id] as $key => $value) {
                    if (!array_key_exists($key, $r_base_array)) {
                        if (!array_key_exists($key, $total)) {
                            $total[$key] = 0;
                        }
                        $total[$key] += $recommendation_model[$id][$key] * $sim;

                        if (!array_key_exists($key, $sim_sums)) {
                            $sim_sums[$key] = 0;
                        }
                        $sim_sums[$key] += $sim;
                    }
                }
            }
        }

        foreach ($total as $key => $value) {
            $ranks[$key] = $value / $sim_sums[$key];
        }

        uasort($ranks, array($this, 'cmp'));

        return $ranks;
    }

    // comparison function, sort from biggest to smallest
    function cmp($a, $b) {
        if ($a == $b) {
            return 0;
        }
        return ($a > $b) ? -1 : 1;
    }

}
