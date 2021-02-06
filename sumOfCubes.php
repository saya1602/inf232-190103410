<?php
     
    echo sumOfCubes([1, 5, 9]);

    function sumOfCubes($nums) {
        $len = count($nums);
        $sum = 0;
        for($i = 0; $i < $len; $i++) {
            $sum += $nums[$i]*$nums[$i]*$nums[$i];
        }
        return $sum;
    }

?>