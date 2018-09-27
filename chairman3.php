<html>
<head>
<style type="text/css">
	body{background-image:url(ll.jpg)
	}
  
 </style>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="chairman3.css"/>
</head>
<body>
<center><img src='nit.jpg' height=250px width=250px /></center>
<div id="box">
<?php
 session_start();
//include 'login1.php';
//include 'process2.php';
 $roll=$_GET['id'];
//$id1=$_SESSION1['password'];
 //echo "NAME:          ".$id."</br>";
//echo "PASSWORD:          ".$id1;
//echo "<a href ='student_detail.php?id={$db_username}'>Thesis submission</a>";
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
	if(!isset($_SESSION['login_cha']) || $_SESSION['login_cha'] != true)
	{
	      header('Location:index.html');
	}
/*	$que="INSERT into stud1 values('caman','ca','student')";
   if( mysql_query($que)){}
   else
   echo "failed";*/
	$query = mysql_query("SELECT distinct* FROM reviewer1, stud2 where  stud2.roll=reviewer1.roll and stud2.roll='$roll'");
	
	//$row = mysql_fetch_assoc($query);
		//code to log in
		echo "<table>";
		echo "<tr><td>REVIEWER'S NAME</td></tr>";
		while ($row = mysql_fetch_assoc($query)) {
		  $db_name=$row['reviewername'];
		  //echo "<br/>";
		  echo "<tr>";
		  echo "<td>$db_name</td>";
		  echo"</tr>";
		  }
		  echo"</table>";
		//	$db_roll = $row['roll'];
			//$db_branch=$row['branch'];
		//	$db_reveiwer1 =$row['reviewer1'];
		/*	$db_reveiwer2=$row['reviewer2'];
			$db_reveiwer3= $row['reviewer3'];
			$db_reveiwer4= $row['reviewer4'];*/
			//$db_topic=$row['topic'];
		//	if ($username == $db_username && md5($password) == $db_password) {
			//echo "log in successfull, <a href = 'student_login.php'>Members only</a> click here to enter the member area";
			//$_SESSION['branch'] = $db_branch;}
		//}
       /*echo "NAME:          ".	$db_name."</br>";
	   echo "ROLL:          ".$db_roll."</br>";
	   echo "TOPIC:          ".$db_topic."</br>";
	   echo "REVIEWER1:          ".$db_reveiwer1."</br>";
	   echo "REVIEWER2:          ".$db_reveiwer2."</br>";
	   echo "REVIEWER3: ".$db_reveiwer3."</br>";
	   echo "REVIEWER4: ".$db_reveiwer4."</br>";*/
	   
?>
 

<form action="reviewers1.php?id=<?php echo $roll?>" method="post">

<input type='submit' name='submit' value='submit' />
</form>
<form action="chairman4.php?id=<?php echo $roll?>" method="post">
<input type='submit' name='reject' value='reject' />
<cENTER> <a href="logout.php">logout</a></CENTER>
</form>
</div>
</body>
</html>