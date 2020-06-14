<html>
    <head>
        <meta charset="UTF-8">
        <title>Database Connection Check</title>
    </head>
    <body>
        <?php
		$db_name ="heroku_a7415d3e79d170d";	//Change as per your DB Name mysql workbench

		$mysql_hostname = "us-cdbr-east-05.cleardb.net";	//mysql workbench
		$mysql_user = "b6a2a0fb2520ef";			//mysql workbench
		$mysql_password = "ae59e78e";			//mysql workbench
		$mysql_database = $db_name;
		$dbc = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("oops !Could not connect database");
		mysqli_select_db($dbc,$mysql_database) or die("opps! database not connected");
		echo 'Database Connected : '.$mysql_database;
        ?>
    </body>
</html>
