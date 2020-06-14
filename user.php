<?php 

session_start();

if(!isset($_SESSION['userName']) )

{ 

header('location:login.php'); 

	}

	 $user=$_SESSION['userName'];

	

 ?>
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<meta charset="utf-8">
  <title>Docle</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
	
	<?php 

		     include('db.php');

           //  $query="select * from users where uMail='".$email."'";

	      ?>
	
	
   

        <?php

    
echo 'hello '.$user;
 
        ?>
		<input type="button" value="Logout" onclick="window.location.href = 'logout.php';">
		
		<h1>Docle</h1>
		<ul class="nav navbar-nav">
    <li>
      <div id="status">
        <span class="label label-danger" style="font-size: 16px"><i class="fa fa-plug"></i> OFFLINE</span>
      </div>
    </li>
  </ul>

  <script type="text/javascript">
    var statusType = {
      connected: {
        msg: 'CONNECTED',
        label: 'label-warning',
        fa: 'fa-wifi'
      },
      online: {
        msg: 'ONLINE',
        label: 'label-primary',
        fa: 'fa-users'
      },
      offline: {
        msg: 'OFFLINE',
        label: 'label-danger',
        fa: 'fa-plug'
      }
    };

    var socket = io.connect('http://localhost:8001', {
      'reconnection': true,
      'reconnectionDelay': 500,
      'reconnectionAttempts': 10
    });

    socket.on('users_count', function (data) {
      $("#counter").text(data);
      showStatus(statusType.online, data);
    });

    function showStatus(currentStatus, num) {
      var status = $('#status');
      var label = $('<span class="label" style="font-size: 16px"></span>');
      var icon = $('<i class="fa"></i>');
      var msg = '';

      status.html('');

      switch (currentStatus) {
        case statusType.connected:
          label.addClass(statusType.connected.label);
          icon.addClass(statusType.connected.fa);
          msg = statusType.connected.msg;
          break;
        case statusType.online:
          label.addClass(statusType.online.label);
          icon.addClass(statusType.online.fa);
          msg = num + ' ' + statusType.online.msg;
          break;
        case statusType.offline:
          label.addClass(statusType.offline.label);
          icon.addClass(statusType.offline.fa);
          msg = statusType.offline.msg;
          break;
      }

      label.append(icon);
      label.append(' ' + msg);
      status.append(label);
    }
  </script>
    </body>
</html

 