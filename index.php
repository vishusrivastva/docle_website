<?php 
session_start();
$user=$_SESSION['userName'];
$fuser=$_SESSION['firstName'];
$luser=$_SESSION['lastName'];
$emuser=$_SESSION['uMail'];
//header('location:login.php'); 
 ?>
<html>
    <head>
        <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include "head-link.php" ?>
		<link rel="stylesheet" href="css/index.css">
		<title>Docle</title>
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./bootstrap/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="./bootstrap/css/bootstrap-table.min.css">
    </head>
    <body>
		<?php
		if(!isset($_SESSION['userName']) )
		{
		?>
		<br> <br> <br> <br> <br>
		<div class="container login-container">
			<div class="text-center">
				<div class="col-lg-6 md-12" id="float-left">
					<div class="container">
						<div class="image-down text-center">
							<img src="image/arrow-down.png" alt="">
						</div>
						<br>
						<h3 class="text-center">WELCOME TO</h3>
						<h3 class="text-center">Docle</h3>
						<h6 class="text-center">You are not authorized to acces this page. Click login to access.</h6>
						<div class="form-group row">
							<div class="col-lg-12 text-center">
								<a href="login.php">
									<button class="btn btn-primary">Login</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		} 
		else
		{
			//$user=$_SESSION['userName'];
			//echo 'hello '.$user;
		?>
		

		<div id="modal-counter" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">
								&times;
							</span>
						</button>
						<h4 class="modal-title">
							<button class="btn btn-primary">Visitor Statistics</button>
						</h4>
					</div>

					<div class="modal-body">
						<p>
							<button class="btn btn-primary">Live Viewer: </button>
						</p>
						<table id="table-counter-now"
							   data-toggle="table"
							   data-search="true"
							   data-show-columns="true"
							   data-search-align="left"
							   data-buttons-align="left"
							   data-row-style="NS_COUNTER.rowStyle">
							<thead>
							<tr>
								<th data-field="expires" data-sortable="true" data-formatter="NS_COUNTER.timeFormatter">
									Expires
								</th>
								<th data-field="visitTime" data-sortable="true" data-formatter="NS_COUNTER.timeFormatter">
									Visit time
								</th>
								<th data-field="sessionId" data-sortable="true">
									Session ID
								</th>
								<th data-field="clientId" data-sortable="true">
									Client ID
								</th>
								<th data-field="clientIp" data-sortable="true">
									IP
								</th>
								<th data-field="clientBrowser" data-sortable="true">
									Browser
								</th>
								<th data-field="clientOs" data-sortable="true">
									OS
								</th>
								<th data-field="lastUrl" data-sortable="true" data-formatter="NS_COUNTER.urlFormatter">
									Last URL
								</th>
							</tr>
							</thead>
						</table>

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Close
						</button>
						<button id="btn-counter-refresh" type="button" class="btn btn-primary">
							Refresh
						</button>
					</div>
				</div>
			</div>
		</div>
		<br> <br> <br> <br> <br>
		<div class="container login-container">
			<div class="text-center">
				<div class="col-lg-6 md-12" id="float-left">
					<div class="container">
						<div class="image-down text-center">
							<img src="image/arrow-down.png" alt="">
						</div>
						<br>
						<div class="counter">
							<span class="visitors-now"></span>
						</div>
						<h3 class="text-center">Welcome</h3>
						<h3 class="text-center"><?php echo $fuser.' '.$luser;?></h3>
						<h6 class="text-center">You are currently accessing this page.</h6>
						<div class="form-group row">
							<div class="col-lg-12 text-center">
								<input type="button" class="btn btn-primary" value="Logout" onclick="window.location.href = 'logout.php';" >
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
		}
		include "script.php" ?>
    </body>
</html

 