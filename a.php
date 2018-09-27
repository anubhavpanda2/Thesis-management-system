<html>
<html lang="en">
<head>
<title>HOME</title>
   <style type="text/css">
    body{
    background-image:url(a.jpg)
    }
  </style>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="a.css"/>
</head>
<body>
    </br>
    <center><div id="b">
         <img  src='banner2.jpg' height=40% width=100% />
    </div></center>
	<div id="box2">
	<center><h3>ACCEPTED THESIS<HR/></H3></center>
	<marquee  behavior="scroll" direction="up" scrollamount=4>
	<?PHP
 session_start();
//include 'login1.php';
//include 'process2.php';
 //$roll=$_GET['id'];
 //$name1=$_POST['comment'];
// echo $name1;
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
   
  $query = mysql_query("SELECT * from accepted_thesis ");
  while($row = mysql_fetch_assoc($query))
  {
  //if($row['studname'] != null)
  //{
  $name=$row['studname'];
  $roll=$row['roll'];
  $topic=$row['topic'];
  echo "<div id=\"c\"><ul><li>$topic</li><ul></div>";
  //}
  }
  //if($p==1)
  //{
  //echo $roll;
  //}
  //else
 // {
 // echo"no files available";
 // }
  // $row = mysql_fetch_assoc($query);
//	$id = $row['status'];
//	$id+=1;
//	$query = mysql_query("update stud2 set text='$name1',status=6 where roll='$roll'");
//header('location:chairman2.php');
?>
</marquee>
     <p id="text"></p>
	</div>
   <div id="box">
     <p id="text"></p>
	<nav id="top">
	     <ul>
		     <li><a href="a.php">Home</a></li>
			 <li><a href="index.html">log in</a></li>
			 <li><a href="about_us.php">about us</a></li>
			 </ul>
 
	</nav> 
   </div>
  <div id="box1">
       <p id="text1"></p>
       <H1>THESIS SUBMISSION</H1>
       <marquee>
      
    <img  src='CS_banner.jpg' height=200PX width=100% />
    <img  src='banner_elec.jpg' height=200PX width=100% />
    <img  src='banner_mech.jpg' height=200PX width=100% />
    <img  src='banner_ec.jpg' height=200PX width=100% />
  
       </marquee>
  </div>
   </body>
   </html>
    
	