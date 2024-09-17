<?php

    $weight = $_POST["weight"];
    $height = $_POST["height"];

    $totaal = $weight / ($height * $height);
    echo "<p> Je BMI is: " . round($totaal, 2) . "<p/>";


?>