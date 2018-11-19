
<?php
//$user_m = array(array(0.3, 0.1, 0.2, 0.1, 0.3));
//$criteria_m = array(
//    array(1, 0.8, 0.6, 0.6, 0.6),
//    array(0.6, 0.8, 0.8, 0.8, 0.8),
//    array(0.4, 0.4, 0.4, 1, 0.6),
//    array(0.8, 0.8, 1, 1, 0.8),
//    array(0.4, 0.6, 0.6, 0.8, 0.4)
//);
//$cost_m = array(0);
function flipDiagonally($arr) {
    $out = array();
    foreach ($arr as $key => $subarr) {
        foreach ($subarr as $subkey => $subvalue) {
            $out[$subkey][$key] = $subvalue;
        }
    }
    return $out;
}

function calculate_saw($user_matrix, $criteria_matrix, $cost_matrix) {
    // transpose
    $process_criteria_matrix =  flipDiagonally($criteria_matrix);
    // normalize
    for ($i = 0 ; $i < count($process_criteria_matrix) ; $i++) {
        $curr_min =  min($process_criteria_matrix[$i]);
        $curr_max =  max($process_criteria_matrix[$i]);
        for ($j = 0 ; $j < count($process_criteria_matrix[$i]) ; $j++) {
            if (in_array($i, $cost_matrix)) {
                $process_criteria_matrix[$i][$j] = $curr_min / $process_criteria_matrix[$i][$j];                
            } else {
                $process_criteria_matrix[$i][$j] = $process_criteria_matrix[$i][$j] / $curr_max;
            }   
        }
    }

    // multiply with user matrix
    $result = array();
    for ($i = 0; $i < count($user_matrix); $i++){
        for($j=0; $j < count($process_criteria_matrix[0]); $j++){
            $result[$i][$j] = 0;
            for($k=0; $k < count($process_criteria_matrix); $k++){
                $result[$i][$j] += $user_matrix[$i][$k] * $process_criteria_matrix[$k][$j];
            }
        }
    }

    return $result;
}
 

?>