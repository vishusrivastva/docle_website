<?php
$mysql_hostname = "us-cdbr-east-05.cleardb.net";
$mysql_user ="b6a2a0fb2520ef";
$mysql_password ="ae59e78e";
$mysql_database ="heroku_a7415d3e79d170d";
$dbc = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("oops !Could not connect database");
mysqli_select_db($dbc,$mysql_database) or die("opps! database not connected");

?> 
