<html>
<head>
<style type="text/css">
	body { 
            background-image:url(student.jpg)
	}
  
 </style>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="slogin.css"/>
</head>
<body>
<center><img src='sar.jpg' height=250px width=250px /></center> 
 <div id="box">
     <p id="text"></p>
	<nav id="bc">
	  <br/>
	  <?php
	  session_start();
	  $id=$_SESSION['username'];
//include 'login1.php';
//include 'process2.php';
 //$roll=$_GET['id'];
// $name= $_GET[$_GET['id2']];
 //$name=$_GET['id2'];
 //$name1=$_POST['comment'];
 //$rating=$_POST['rating'];
 
 
// echo $name;
 //echo $roll;
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
$query = mysql_query("select roll from stud where username='$id'");
$row = mysql_fetch_assoc($query);
$roll=$row['roll'];
$query = mysql_query("select count(*) from stud2 where roll='$roll'");
$result = mysql_fetch_row($query);
//$row = mysql_fetch_assoc($query);
//$status=$row['status'];
if($result[0] )
{
		echo "    <a href=\"slogin2.php?id={$roll}\">thesis</a><BR/><br/>";
		}
		else
		{echo "    <a href=\"student_login.php\">thesis</a><BR/><br/>";
		}
			 
 ?>
  <a href="slogin1.php">details</a><BR/><br/>
			
			 <a href="logout.php">logout</a>
	</nav> 
   </div>

<h3 id="box1">
<div id="text"><center> <h2>WELCOME</h2> </center>

</div>
</h3>

<body>
</html>