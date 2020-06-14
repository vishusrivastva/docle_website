<?php

    $dbServerName = "us-cdbr-east-05.cleardb.net"; //hostname mysql workbench
    $dbUsername = "b6a2a0fb2520ef";				//username mysql workbench
    $dbPassword = "ae59e78e";					// password mysql workbench
    $databaseName = "heroku_a7415d3e79d170d";	//db name mysql workbench

    $db = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $databaseName);

    if (!$db) {
        die("Connection Failed ! " . mysqli_connect_errno());
    }
