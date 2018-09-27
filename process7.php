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
 $name=$_GET['id2'];
// $name1=$_POST['comment'];
 //$rating=$_POST['rating'];
 
 
 echo $name;
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
//$query = mysql_query("update pre_rev set comment='$name1' where roll='$roll' and username='$name'");
$query1=mysql_query("select count(*) from counter where reviewername='$name'and roll='$roll'");
	//$query = mysql_query("update pre_rev set comment='$name1'where roll='$roll' and username='$name'");
		$query = mysql_query("select * from counter where roll='$roll'");
		while($row = mysql_fetch_assoc($query))
		{
	//	$numrows = mysql_num_rows($query);
			//$roll1 = $row['roll'];
			$netctr = $row['netcounter'];
			}
			if($query1==0)
			{
			mysql_query("insert into counter values('$roll',1,'$name',1)");
			}
			elseif($netctr==1)
			{
	mysql_query("update stud2 set status=3 where roll='$roll'");
	}
	else
	{
	$netctr = $netctr+1;
	$query = mysql_query("insert into counter values('$roll',1,'$name','$netctr')");
	}
	
	
	
header('location:rev_login.php');
?>
