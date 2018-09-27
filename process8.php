<html>
<head>
</head>
<body>
<?php
 session_start();
//include 'login1.php';
//include 'process2.php';
 $roll=$_GET['id'];
// $name= $_GET[$_GET['id2']];
 //$name=$_GET['id2'];
// $name1=$_POST['comment'];
 
 
// echo $name;
 echo $roll;
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
  //$query = mysql_query("delete from reviewer where roll='$roll'");
  // $row = mysql_fetch_assoc($query);
//	$id = $row['status'];
//	$id+=1;
	$query = mysql_query("select * from stud2 where roll='$roll'");
	$row = mysql_fetch_assoc($query);
	$studname=$row['studname'];
	//$roll=$row['roll'];
	//$data=$row['data'];
	$topic=$row['topic'];
	echo $studname;
	echo $topic;
	$query = mysql_query("insert into accepted_thesis values('$studname','$roll','$topic',null)");
	$query = mysql_query("insert into final values('$roll',2)");
	$query = mysql_query("delete from stud2 where roll='$roll'");
	$query = mysql_query("delete from pre_rev where roll='$roll'");
	$query = mysql_query("delete from reviewer where roll='$roll'");
	$query = mysql_query("delete from counter where roll='$roll'");
	$query = mysql_query("delete from thesis where roll='$roll'");
header('location:director.php');
?>
</body>
</html>