<html>
<html lang="en">
<head>
   <style type="text/css">
    body{
	 background-image:url(ll.jpg)
	 
	}  
  </style>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="chairman.css"/>
</head>
<body>
<?php
session_start();
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
	
	if(!isset($_SESSION['login_cha']) || $_SESSION['login_cha'] != true)
	{
	      header('Location:index.html');
	}



?>

   
  <img  src='banner2.jpg' height=40% width=100% /> 
   <div id="box">
    <strong><a href="dean2.php">STATUS OF THESIS</a></strong>
<strong><a href="logout.php">LOGOUT</a></strong>	
     <p id="text"></p>
	
   </div>
   </body>
   </html>
    
	