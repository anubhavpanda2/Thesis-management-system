<html>
<head>
</head>
<body>
<?php
 session_start();
 $roll=$_GET['id1'];
 $name=$_GET['id2'];
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");

$query = mysql_query("select * from pre_rev  where roll='$roll' and username='$name'");
$row = mysql_fetch_assoc($query);
$score=$row['score'];
$type=$row['type'];
	$query = mysql_query("delete from pre_rev  where roll='$roll' and username='$name'");
	if($type==1)
	{
		$query = mysql_query("SELECT * FROM pre_rev WHERE type = 1");
	
	$numrows = mysql_num_rows($query);
	echo $numrows;
	$i=5-$numrows+1;
	echo $i;
		$query = mysql_query("update pre_rev  set score=1 where roll='$roll' and score='$i' and type=1");
		}
		if($type==2)
	{
		$query = mysql_query("SELECT * FROM pre_rev WHERE type = 2");
	
	$numrows = mysql_num_rows($query);
	echo $numrows;
	$i=5-$numrows+1;
	echo $i;
		$query = mysql_query("update pre_rev  set score=1 where roll='$roll' and score='$i' and type=2");
		$query = mysql_query("update pre_rev  set score=2 where roll='$roll' and score='$i' and type=2");
		}
header('location:rev_login.php');
?>
