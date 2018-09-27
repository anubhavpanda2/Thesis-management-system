<html>
<body>
<?php
$username=$_POST['username'];
$password=$_POST['password'];
$login_as=$_POST['login_as'];
session_start();
if (!$username) {
	//echo 'Please enter your username';
	header('Location: error1.php');
}

if (!$password) {
	//echo 'Please enter your password';
    header('Location: error1.php');
}else if ($username && $password) {
	$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("ssp") or die ("couldnt find the db");
/*	$que="INSERT into stud1 values('caman','ca','student')";
   if( mysql_query($que)){}
   else
   echo "failed";*/
	$query = mysql_query("SELECT * FROM login WHERE username = '$username' and loginas='$login_as'");
	
	$numrows = mysql_num_rows($query);
	
	if ($numrows == 0) {
		//echo 'that username doesnt exist';
		header('Location: error2.php');
	}
	
	if ($numrows != 0) {
		//code to log in
		while ($row = mysql_fetch_assoc($query)) {
			$db_username = $row['username'];
			$db_password = $row['password'];
		//	if ($username == $db_username && md5($password) == $db_password) {
			//echo "log in successfull, <a href = 'student_login.php'>Members only</a> click here to enter the member area";
			//$_SESSION['user'] = $db_username;}
		}
		//check to see if they match;
		if ($username == $db_username && $password == $db_password) 
		{
			//echo "log in successfull, <a href = 'student_login.php'>Members only</a> click here to enter the member area";
			$_SESSION['username'] = $db_username;
			$_SESSION['login_stud']=true;
		//	$_SESSION1['password']=$db_password;
			//echo "hello ".$db_username;
			//echo "<a href ='student_detail.php?id={$db_username}'>.</a>";
			 header('Location:home.php');
			 //<a>
		}
		else{
			//echo 'Incorrect password';
			header('Location:login.php');
		}
	}
}
break;
   ?>
   </body>
</html>