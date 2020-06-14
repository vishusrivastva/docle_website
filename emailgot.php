 
<?php 
session_start();

$emuser=$_SESSION['uMail'];
echo (preg_match("/(\W|^)[\w.+\-]*@navigus\.com(\W|$)/ig",$emuser))?'true':'false';
echo $emuser;
/*function endsWith($string, $endString) 
{ 
	$len = strlen($endString); 
	if ($len == 0) { 
		return true; 
	} 
	return (substr($string, -$len) === $endString); 
} 
echo $emuser;

 
if(endsWith($emuser,"@navigus.com")) 
	echo "Premium User ,Double click on Live Viewer to access more features; password: abcd"; 
else
	echo "Normal User"; */
?> 
