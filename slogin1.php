<html>
<head>
<style type="text/css">
	body{ background-image:url(student.jpg)
	}
  
 </style>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="slogin.css"/>
</head>
<body>
<center><img src='sar.jpg' height=250px width=250px /></center>
<div id="box">
<div id="bc">
<br/><br/><a href="logout.php">logout</a><br/>
<br/><a href="slogin.php">main</a>
</div>
<br/>
<div id="box1">
<div id="abcd">
<center><?php
 session_start();
//include 'login1.php';
//include 'process2.php';
  $id=$_SESSION['username'];
//$id1=$_SESSION1['password'];
 echo "NAME:          ".$id."</br></br>";
//echo "PASSWORD:          ".$id1;
//echo "<a href ='student_detail.php?id={$db_username}'>Thesis submission</a>";
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
	if(!isset($_SESSION['login_stud']) || $_SESSION['login_stud'] != true)
	{
	      header('Location:index.html');
	}
/*	$que="INSERT into stud1 values('caman','ca','student')";
   if( mysql_query($que)){}
   else
   echo "failed";*/
	$query = mysql_query("SELECT * FROM stud WHERE username = '$id'");
	
	$numrows = mysql_num_rows($query);
	
	if ($numrows == 0) {
		//echo 'that username doesnt exist';
		header('Location: error2.php');
	}
	
	if ($numrows != 0) {
		//code to log in
		while ($row = mysql_fetch_assoc($query)) {
			//$db_age = $row['age'];
			$db_branch = $row['branch'];
			$db_roll = $row['roll'];
			//$db_cgpa = $row['cgpa'];
		//	if ($username == $db_username && md5($password) == $db_password) {
			//echo "log in successfull, <a href = 'student_login.php'>Members only</a> click here to enter the member area";
			//$_SESSION['user'] = $db_username;}
		}
		$query = mysql_query("SELECT * FROM final WHERE  roll= '$db_roll'");
		$row = mysql_fetch_assoc($query);
		$id1=$row['status'];
		if($id1==1)
		{
		echo " previous thesis was rejected <BR/></br>";
		}
		if($id1==2)
		{
		echo "previous thesis was accepted <BR/></br>" ;
		}
       //echo "AGE:          ".$db_age."</br>";
	   echo "BRANCH:          ".$db_branch."</br></br>";
	   echo "ROLL:          ".$db_roll."</br></br>";
	 //  echo "CGPA:          ".$db_cgpa."</br>";
	   }
?>
</center>
</div>
</div>
</div>
</body>
</html>