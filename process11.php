<html>
<head>
</head>
<body>
<?php
 session_start();
//include 'login1.php';
//include 'process2.php';
 $roll=$_GET['id'];
 $name1=$_POST['comment'];
 echo $name1;
//$id1=$_SESSION1['password'];
 //echo "NAME:          ".$id."</br>";
//echo "PASSWORD:          ".$id1;
//echo "<a href ='student_detail.php?id={$db_username}'>Thesis submission</a>";
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
/*	$que="INSERT into stud1 values('caman','ca','student')";
   if( mysql_query($que)){}
   else
   echo "failed";*/
  $query = mysql_query("delete from reviewer where roll='$roll'");
  // $row = mysql_fetch_assoc($query);
//	$id = $row['status'];
//	$id+=1;
	$query = mysql_query("update stud2 set text1='$name1',status=9 where roll='$roll'");
header('location:dean2.php');
?>
