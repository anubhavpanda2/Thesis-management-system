<?php
 session_start();
//include 'login1.php';
//include 'process2.php';
  $id=$_SESSION['username'];
//$id1=$_SESSION1['password'];
 echo "NAME:          ".$id."</br>";
//echo "PASSWORD:          ".$id1;
//echo "<a href ='student_detail.php?id={$db_username}'>Thesis submission</a>";
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
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
			$db_age = $row['age'];
			$db_branch = $row['branch'];
			$db_roll = $row['roll'];
			$db_cgpa = $row['cgpa'];
		//	if ($username == $db_username && md5($password) == $db_password) {
			//echo "log in successfull, <a href = 'student_login.php'>Members only</a> click here to enter the member area";
			//$_SESSION['user'] = $db_username;}
		}
       echo "AGE:          ".$db_age."</br>";
	   echo "BRANCH:          ".$db_branch."</br>";
	   echo "ROLL:          ".$db_roll."</br>";
	   echo "CGPA:          ".$db_cgpa."</br>";
	   }
?>