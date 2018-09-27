<html>
<head>

<meta charset="utf-8" />
 <link rel="stylesheet" href="errorc.css"/>
 <style type="text/css">
	body{ background-image:url(supervisor.jpg);
	 
	
	}
</style>
</head>
<body>
<center><div id="b">
<center><img src="CS_banner.jpg" height=40% width=100%/></center>
</div></center>
<div id="bc"
<div id="text">
<br/>
<a href="supervisorcs3.php">main</a><br/><br/>
<a href="logout.php">logout</a><BR/>
</div>
</div>
<?PHP $roll=$_GET['id'];?>
<form action="chairman.php?id=<?php echo $roll; ?>" method='post'>

<center>
<?php
 session_start();
//include 'login1.php';
//include 'process2.php';
 
 //$name1=$_POST['comment'];
 //echo $name1;
//$id1=$_SESSION1['password'];
 //echo "NAME:          ".$id."</br>";
//echo "PASSWORD:          ".$id1;
//echo "<a href ='student_detail.php?id={$db_username}'>Thesis submission</a>";
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
	if(!isset($_SESSION['login_super']) || $_SESSION['login_super'] != true)
	{
	      header('Location:index.html');
	}

/*	$que="INSERT into stud1 values('caman','ca','student')";
   if( mysql_query($que)){}
   else
   echo "failed";*/
  $query = mysql_query("select * from stud2 where roll='$roll'");
   $row = mysql_fetch_assoc($query);
   $status=$row['status'];
$text = $row['text'];
if($status==6)
{
echo "<h3>    <div id=\"text\">COMMENTS</div></H3><div id=\"container\"> $text</div>";
}
//	$id+=1;
	//$query = mysql_query("update stud2 set text='$name1' where roll='$roll'");
//header('location:chairman2.php');
?>
</center>



<center>
<h3>ROLLNO:<?php echo "$roll"?></h3><BR/>
<div id="ab">
<h1>INDIAN REVIEWERS:</h1><BR/>
REVIEWER 1:<BR/>
NAME:    <input type="text" name="name1" size="40" /><br/>
EMAIL:    <input type="text" name="email1" size="40" /><br/>
AREA OF INTEREST:    <input type="text" name="ai1" size="40" /><br/>
PH.NO:    <input type="text" name="phno1" size="40" /><br/>
<hr/>
REVIEWER 2:<BR/>
NAME:    <input type="text" name="name2" size="40" /><br/>
EMAIL:    <input type="text" name="email2" size="40" /><br/>
AREA OF INTEREST:    <input type="text" name="ai2" size="40" /><br/>
PH.NO:    <input type="text" name="phno2" size="40" /><br/>
<hr/>
REVIEWER 3:<BR/>
NAME:    <input type="text" name="name3" size="40" /><br/>
EMAIL:    <input type="text" name="email3" size="40" /><br/>
AREA OF INTEREST:    <input type="text" name="ai3" size="40" /><br/>
PH.NO:    <input type="text" name="phno3" size="40" /><br/>
<hr/>
REVIEWER 4:<BR/>
NAME:    <input type="text" name="name4" size="40" /><br/>
EMAIL:    <input type="text" name="email4" size="40" /><br/>
AREA OF INTEREST:    <input type="text" name="ai4" size="40" /><br/>
PH.NO:    <input type="text" name="phno4" size="40" /><br/>
<hr/>
REVIEWER 5:<BR/>
NAME:    <input type="text" name="name5" size="40" /><br/>
EMAIL:    <input type="text" name="email5" size="40" /><br/>
AREA OF INTEREST:    <input type="text" name="ai5" size="40" /><br/>
PH.NO:    <input type="text" name="phno5" size="40" /><br/>
<hr/>
</div>
<div id="container">
<h1>FOREIGNER REVIEWERS</h1>
REVIEWER 1:<BR/>
NAME:    <input type="text" name="name6" size="40" /><br/>
EMAIL:    <input type="text" name="email6" size="40" /><br/>
AREA OF INTEREST:    <input type="text" name="ai6" size="40" /><br/>
PH.NO:    <input type="text" name="phno6" size="40" /><br/>
<hr/>
REVIEWER 2:<BR/>
NAME:    <input type="text" name="name7" size="40" /><br/>
EMAIL:    <input type="text" name="email7" size="40" /><br/>
AREA OF INTEREST:    <input type="text" name="ai7" size="40" /><br/>
PH.NO:    <input type="text" name="phno7" size="40" /><br/>
<hr/>
REVIEWER 3:<BR/>
NAME:    <input type="text" name="name8" size="40" /><br/>
EMAIL:    <input type="text" name="email8" size="40" /><br/>
AREA OF INTEREST:    <input type="text" name="ai8" size="40" /><br/>
PH.NO:    <input type="text" name="phno8" size="40" /><br/>
<hr/>
REVIEWER 4:<BR/>
NAME:    <input type="text" name="name9" size="40" /><br/>
EMAIL:    <input type="text" name="email9" size="40" /><br/>
AREA OF INTEREST:    <input type="text" name="ai9" size="40" /><br/>
PH.NO:    <input type="text" name="phno9" size="40" /><br/>
<hr/>
REVIEWER 5:<BR/>
NAME:    <input type="text" name="name10" size="40" /><br/>
EMAIL:    <input type="text" name="email10" size="40" /><br/>
AREA OF INTEREST:    <input type="text" name="ai10" size="40" /><br/>
PH.NO:    <input type="text" name="phno10" size="40" /><br/>
<hr/>
</div>
<BR/>
<input type='submit' name='submit' value='submit' />
</center>
</form>
</body>
</html>