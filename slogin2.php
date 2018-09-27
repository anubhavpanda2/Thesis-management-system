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
<h3 id="box"> STUDENT DETAILS 
<div id="text">
<a href="logout.php">logout</a>
</div>
<?php
 session_start();
//include 'login1.php';
//include 'process2.php';
 $roll=$_GET['id'];
// $name= $_GET[$_GET['id2']];
 //$name=$_GET['id2'];
 //$name1=$_POST['comment'];
 //$rating=$_POST['rating'];
 
 
 //echo $name;
 echo $roll."<br/>";
//$id1=$_SESSION1['password'];
 //echo "NAME:          ".$id."</br>";
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
  //$query = mysql_query("delete from reviewer where roll='$roll'");
  // $row = mysql_fetch_assoc($query);
//	$id = $row['status'];
//	$id+=1;
//$query = mysql_query("update pre_rev set comment='$name1' where roll='$roll' and username='$name'");
//$query1=mysql_query("select count(*) from counter where reviewername='$name'and roll='$roll'");
	//$query = mysql_query("update pre_rev set comment='$name1' ,rating='$rating'  where roll='$roll' and username='$name'");
		$query = mysql_query("select * from stud2 where roll='{$roll}'") or die(mysql_error());
		$row = mysql_fetch_assoc($query);
		$name=$row['studname'];
		$status=$row['status'];
	//	echo "<br/>status:".$status."<br/>";
echo "welcome :"; 
echo $name."<br/>"; 
echo"your project is under consideration<br/>project location:";
if($status==0 || $status==6 || $status==9)
{
echo "supervisor ";
}
if($status==1)
{
echo "chairman ";
}
if($status==2)
{
echo "reviewer";
}
if($status==3)
{
echo "director";
}
if($status==8)
{
echo "dean";
}
if($status==10)
{
echo "director";
 $query = mysql_query("select * from thesis where roll='$roll'");
  $row = mysql_fetch_assoc($query);
$id = $row['id'];
if($id==0)
{
echo"<form action=\"process18.php?id=$roll\" method='post' enctype=\"multipart/form-data\">
<h3>THESIS</h3>
	<input type=\"file\" name=\"uploaded_file\"/>
	 <input type='submit' name='submit' value='submit' />
	 </form>";
	 }
}

	//	$numrows = mysql_num_rows($query);
			//$roll1 = $row['roll'];
//			$netctr = $row['netcounter'];
		//	}
	//		if($query1==0)
			/*{
			mysql_query("insert into counter values('$roll',1,'$name',1)");
			}
			elseif($netctr==3)
			{
	mysql_query("update stud2 set status=3 where roll='$roll'");
	}
	else
	{
	$netctr = $netctr+1;
	$query = mysql_query("insert into counter values('$roll',1,'$name','$netctr')");
	}*/
	
	
	
//header('location:rev_login.php');
?>
</h3>
</body>
</html>