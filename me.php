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
<a href="supervisorme.php">main</a><br/><br/>
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
<h3>ROLLNO:<?php echo "$roll"?></h3>

<h3>REVIEWER1:<h3><select name="reviewer1">
		<option>RAM</option>
		<option>SOURAV</option>
		<option>SUBHASHIS</option>
		<option>DIBYARAJ</option>
		<OPTION>BIPIN</OPTION>
</SELECT>
<BR/>
<h3>REVIEWER2:<h3><select name="reviewer2">
		<option>DIPIKA</option>
		<option>SATYAJIT</option>
		<option>TUSHAR</option>
		<option>SUBODH</option>
		<OPTION>SURAJ</OPTION>
</SELECT>
<BR/>
<h3>REVIEWER3:<h3><select name="reviewer3">
		<option>DAVID</option>
		<option>TONY</option>
		<option>PETER</option>
		<option>JOHN</option>
		<OPTION>NATHAN</OPTION>
</SELECT>
<BR/>
<h3>REVIEWER4:<h3><select name="reviewer4">
		<option>JOE</option>
		<option>NICOLE</option>
		<option>MICHEL</option>
		<option>SHAWN</option>
		<OPTION>NAT</OPTION>
</SELECT>
<BR/>
<input type='submit' name='submit' value='submit' />
</center>
</form>
</body>
</html>