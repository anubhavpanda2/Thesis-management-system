<html>
<head>
</head>
<body>
<?php
 session_start();
$roll=$_GET['id'];
 $name=$_GET['id1'];
$status=$_POST['rating'];
echo $status;
 echo $roll;
 echo $name;

$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");

 $query = mysql_query("update pre_rev set score =$status where roll='$roll' and username='$name' ");
 $a=strtoupper($name);
 echo $a;
 $name1=substr($name,0,3);
 
 $a1=strtolower($name1);
 echo $a1;
 $query = mysql_query("insert into reviewer_login values('$a','$a1','$roll')");
header("location:director2.php?id=$roll");
?>
