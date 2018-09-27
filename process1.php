<!doctype html>
<html>
    <head>
       
        </head>
    
<body>     
<?php
$username=$_POST['username'];
$password=$_POST['password'];
$login_as=$_POST['login_as'];
session_start();
       switch ($login_as) {
 
 case 'student':
if (!$username) {
	//echo 'Please enter your username';
	header('Location: error1.php');
}

if (!$password) {
	//echo 'Please enter your password';
    header('Location: error1.php');
}else if ($username && $password) {
	$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
/*	$que="INSERT into stud1 values('caman','ca','student')";
   if( mysql_query($que)){}
   else
   echo "failed";*/
	$query = mysql_query("SELECT * FROM stud WHERE username = '$username'");
	
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
			 header('Location: slogin.php');
			 //<a>
		}
		else{
			//echo 'Incorrect password';
			header('Location: error3.php');
		}
	}
}
break;
 case 'supervisor'://header('Location: login1.php');
       if (!$username) {
	//echo 'Please enter your username';
	header('Location: error1.php');
}

if (!$password) {
	//echo 'Please enter your password';
    header('Location: error1.php');
}else if ($username && $password) {
	$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
/*	$que="INSERT into stud1 values('caman','ca','student')";
   if( mysql_query($que)){}
   else
   echo "failed";*/
	$query = mysql_query("SELECT * FROM supervisor_detail WHERE username = '$username'");
	
	$numrows = mysql_num_rows($query);
	
	if ($numrows == 0) {
		//echo 'that username doesnt exist';
		header('Location: error2.php');
	}
	
	if ($numrows != 0) {
		//code to log in
		while ($row = mysql_fetch_assoc($query)) {
			$db_username1 = $row['username'];
			$db_password1 = $row['password'];
			$db_branch1=$row['branch'];
			
			
		//	if ($username == $db_username && md5($password) == $db_password) {
			//echo "log in successfull, <a href = 'student_login.php'>Members only</a> click here to enter the member area";
			//$_SESSION['user'] = $db_username;}
		}
		echo $db_branch1;
		//check to see if they match;
		if ($username == $db_username1 && $password == $db_password1) 
		{
			//echo "log in successfull, <a href = 'student_login.php'>Members only</a> click here to enter the member area";
			$_SESSION['username'] = $db_username1;
			$_SESSION['login_super']=true;
			switch($db_branch1)
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
		}
		else{
			//echo 'Incorrect password';
			header('Location: error3.php');
		}
	}
}
        break;
		
    case 'director'://header('Location: student_login.php');
	     if (!$username) {
	//echo 'Please enter your username';
	header('Location: error1.php');
}

if (!$password) {
	//echo 'Please enter your password';
    header('Location: error1.php');
}else if ($username && $password) {
	$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
/*	$que="INSERT into stud1 values('caman','ca','student')";
   if( mysql_query($que)){}
   else
   echo "failed";*/
	$query = mysql_query("SELECT * FROM director WHERE username = '$username'");
	
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
			$_SESSION['login_dir']= true;
		//	$_SESSION1['password']=$db_password;
			//echo "hello ".$db_username;
			//echo "<a href ='student_detail.php?id={$db_username}'>.</a>";
			 header('Location: director.php');
			 //<a>
		}
		else{
			//echo 'Incorrect password';
			header('Location: error3.php');
		}
	}
}
		break;
		
    case 'reviewer':
	if (!$username) {
	//echo 'Please enter your username';
	header('Location: error1.php');
}

if (!$password) {
	//echo 'Please enter your password';
    header('Location: error1.php');
}else if ($username && $password) {
	$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
/*	$que="INSERT into stud1 values('caman','ca','student')";
   if( mysql_query($que)){}
   else
   echo "failed";*/
	$query = mysql_query("SELECT * FROM reviewer_login WHERE username = '$username'");
	
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
			$_SESSION['login_rev']=true;
		//	$_SESSION1['password']=$db_password;
			//echo "hello ".$db_username;
			//echo "<a href ='student_detail.php?id={$db_username}'>.</a>";
			 header('Location: rev_login.php');
			 //<a>
		}
		else{
			//echo 'Incorrect password';
			header('Location: error3.php');
		}
	}
}
        break;

		 
		    case 'chairman':
        if (!$username) {
	//echo 'Please enter your username';
	header('Location: error1.php');
}

if (!$password) {
	//echo 'Please enter your password';
    header('Location: error1.php');
}else if ($username && $password) {
	$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
/*	$que="INSERT into stud1 values('caman','ca','student')";
   if( mysql_query($que)){}
   else
   echo "failed";*/
	$query = mysql_query("SELECT * FROM chaiman WHERE username = '$username'");
	
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
			$_SESSION['login_cha']=true;
		//	$_SESSION1['password']=$db_password;
			//echo "hello ".$db_username;
			//echo "<a href ='student_detail.php?id={$db_username}'>.</a>";
			 header('Location: chairman1.php');
			 //<a>
		}
		else{
			//echo 'Incorrect password';
			header('Location: error3.php');
		}
	}
}
		break;
		   case 'dean':
        if (!$username) {
	//echo 'Please enter your username';
	header('Location: error1.php');
}

if (!$password) {
	//echo 'Please enter your password';
    header('Location: error1.php');
}else if ($username && $password) {
	$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
/*	$que="INSERT into stud1 values('caman','ca','student')";
   if( mysql_query($que)){}
   else
   echo "failed";*/
	$query = mysql_query("SELECT * FROM dean WHERE username = '$username'");
	
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
			$_SESSION['login_cha']=true;
		//	$_SESSION1['password']=$db_password;
			//echo "hello ".$db_username;
			//echo "<a href ='student_detail.php?id={$db_username}'>.</a>";
			 header('Location: dean1.php');
			 //<a>
		}
		else{
			//echo 'Incorrect password';
			header('Location: error3.php');
		}
	}
}
		break;
		}
?>

</body>
    
</html>