<html>
<head>
</head>
<body>
<?php
 session_start();
 $roll=$_GET['id'];
 $name=$_GET['id2'];
$comment=$_POST['comment'];
echo $comment;
 echo $roll;
 $name=strtolower($name);
 echo $name;
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
 mysql_query("update pre_rev set comment='$comment' where roll='$roll' and username='$name' ");
header('location:rev_login.php');
?>
