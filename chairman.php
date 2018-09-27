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
 $name1=$_POST['name1'];
 $email1=$_POST['email1'];
 $ai1=$_POST['ai1'];
 $phno1=$_POST['phno1'];
 $name2=$_POST['name2'];
 $email2=$_POST['email2'];
 $ai2=$_POST['ai2'];
 $phno2=$_POST['phno2'];
 $name3=$_POST['name3'];
 $email3=$_POST['email3'];
 $ai3=$_POST['ai3'];
 $phno3=$_POST['phno3'];
 $name4=$_POST['name4'];
 $email4=$_POST['email4'];
 $ai4=$_POST['ai4'];
 $phno4=$_POST['phno4'];
 $name5=$_POST['name5'];
 $email5=$_POST['email5'];
 $ai5=$_POST['ai5'];
 $phno5=$_POST['phno5'];
 $name6=$_POST['name6'];
 $email6=$_POST['email6'];
 $ai6=$_POST['ai6'];
 $phno6=$_POST['phno6'];
 $name7=$_POST['name7'];
 $email7=$_POST['email7'];
 $ai7=$_POST['ai7'];
 $phno7=$_POST['phno7'];
 $name8=$_POST['name8'];
 $email8=$_POST['email8'];
 $ai8=$_POST['ai8'];
 $phno8=$_POST['phno8'];
 $name9=$_POST['name9'];
 $email9=$_POST['email9'];
 $ai9=$_POST['ai9'];
 $phno9=$_POST['phno9'];
 $name10=$_POST['name10'];
 $email10=$_POST['email10'];
 $ai10=$_POST['ai10'];
 $phno10=$_POST['phno10'];
 echo $reviewer1;
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
$name=$row['studname'];
$branch=$row['branch'];
$query = mysql_query("insert into reviewer1 values ('$name','$roll',1,'$name1','$email1','$ai1','$phno1')");
$query = mysql_query("insert into reviewer1 values ('$name','$roll',1,'$name2','$email2','$ai2','$phno2')");
$query = mysql_query("insert into reviewer1 values ('$name','$roll',1,'$name3','$email3','$ai3','$phno3')");
$query = mysql_query("insert into reviewer1 values ('$name','$roll',1,'$name4','$email4','$ai4','$phno4')");
$query = mysql_query("insert into reviewer1 values ('$name','$roll',1,'$name5','$email5','$ai5','$phno5')");
//mysql_query("update stud2 set status=1  where roll='$roll'");

$query = mysql_query("insert into reviewer1 values ('$name','$roll',2,'$name6','$email6','$ai6','$phno6')");
$query = mysql_query("insert into reviewer1 values ('$name','$roll',2,'$name7','$email7','$ai7','$phno7')");
$query = mysql_query("insert into reviewer1 values ('$name','$roll',2,'$name8','$email8','$ai8','$phno8')");
$query = mysql_query("insert into reviewer1 values ('$name','$roll',2,'$name9','$email9','$ai9','$phno9')");
$query = mysql_query("insert into reviewer1 values ('$name','$roll',2,'$name10','$email10','$ai10','$phno10')");
mysql_query("update stud2 set status=1  where roll='$roll'");

switch($branch)
			{
			   case 'CSE':
			   header('Location: supervisorcs3.php');
			   break;
			   case 'EC':
			   header('Location: supervisorec.php');
			   break;
			   case 'ME':
			   header('Location:supervisorme.php');
			   break;
			   case 'EE':
			   header('Location:supervisoree.php');
			   break;
			}
//	$query = mysql_query("update stud2 set status=2 where roll='$roll'");
//header('location:rev_login.php');
?>
