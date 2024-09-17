<?php

    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    if ($gender == "female") {
        $totaal = (((9.5634 *$weight) + (1.8496 * $height)- (4.6756 *$age)) + 655.0955);
    } else if ($gender == "male") {
        $totaal = (((13.7516 * $weight) + (5.0033 * $height)-(6.755 *$age)) + 66.473);
    }

    echo "<p> Je BMR is: " . round($totaal, 2) . "<p/>";