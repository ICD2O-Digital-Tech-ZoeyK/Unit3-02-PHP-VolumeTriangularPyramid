// Copyright (c) 2020 Mr. Coxall All rights reserved
//
// Created by: Mr. Coxall
// Created on: Sep 2020
// This file contains the JS functions for index.html
<?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $a = $_POST['a'];
        $b = $_POST['b'];
        $h = $_POST['h'];

        // Calculate the volume using the formula
        $volume = (1 / 6) * $a * $b * $h;

        // Display the result
        echo "Volume is: " . number_format($volume, 2) . " cm³";
    }
?>
