<html>
<html lang="en">
<head>
   <style type="text/css">
	 body{background-image:url(reviewer.jpg)  }
  </style>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="chairman.css"/>
</head>
<body>
<center><div id="b">
  <img  src='banner2.jpg' height=40% width=100% /></div></center> 
 <center> <h1>WELCOME</H1></center>
   <div id="box">
   <center><a href="logout.php">logout</a><center>
   <H3>STATUS OF THESIS</H3>
<BR/>   

<?php
session_start();
$id=$_SESSION['username'];
//echo $id;
// Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', '', 'sanjit');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
if(!isset($_SESSION['login_rev']) || $_SESSION['login_rev'] != true)
	{
	      header('Location:index.html');
	}
 //$username=$_POST['name'];
// Query for a list of all existing files
//$query=mysql_query("select * from counter where reviewername='$id'");
//while($row = mysql_fetch_assoc($query))
//{
//$name2=$row['']
//}
$sql = "SELECT distinct * FROM `stud2`,`pre_rev` where pre_rev.roll= stud2.roll and pre_rev.username='$id' and score =1 and comment is null";
$result = $dbLink->query($sql);
 
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>THESIS IS NOT SUBMITTED</p>';
    }
    else {
        // Print the top of a table
        echo '<table width="100%" border=1>
                <tr>
                    <td><b>Accept.</b></td>
					<td><b>Reject</b></td>
                    <td><b>Name</b></td>
                    <td><b>Topic </b></td>
                    <td><b>File</b></td>
                    
                </tr>';
 
        // Print each file
        while($row = $result->fetch_assoc()) {
		$status=$row['status'];
		$roll=$row['roll'];
		$score=$row['score'];
	//	$query1=mysql_query("select ctr from counter where reviewername='$id'and roll='$roll'");
	//	$num = mysql_fetch_assoc($query1);
		$query1 = "SELECT `ctr` FROM  `counter` where `reviewername`='$id'and `roll`='$roll'";
$result1 = $dbLink->query($query1);
		$row1 = $result1->fetch_assoc();
		//$row = mysql_fetch_assoc($query);
		//$num=$row['count(*5)'];
		$ctr=$row1['ctr'];
		if($status == 10 && $ctr!=1 &&($score==1 || $score==2))
		{
            echo "
                <tr>
                    <td><a href='comment.php?id1={$roll} & id2={$id}'> accept thesis</a></td>
					<td><a href='comment1.php?id1={$roll} & id2={$id}'>reject thesis</a></td>
                    <td>{$row['studname']}</a></td>
                    <td>{$row['topic']}</td>
                    <td><a href='download.php?id={$row['id']}'>Download</a></td>
                </tr>";
        }
	}	
        // Close table
        echo '</table>';
    }
 
    // Free the result
    $result->free();
}
else
{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}
 
// Close the mysql connection


echo"</div>";
echo"<div id=\"box1\">";

 //session_start();
 //$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	//mysql_select_db("sanjit") or die ("couldnt find the db");//
//$query=mysql_query("select * from pre_rev where rating=1");
/*$sql = "select * from pre_rev where rating=0";
$result1 = $dbLink->query($sql);
while ($row = $result1->fetch_assoc()) {
		  
		  echo $row['roll']."<a href='download.php?id={$row['roll']}'>Download</a>";
		  }*/
		  $lowid= strtolower($id);
		  
		  $sql = "select * from pre_rev where rating=1 and username='$id' and comment is null";
$result = $dbLink->query($sql);
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>THESIS IS NOT SUBMITTED</p>';
    }
    else {
			while($row = $result->fetch_assoc()) {
			
			echo$row['roll']."<a href='download2.php?id={$row['roll']}'>download</a><a href='comment3.php?id1={$row['roll']} & id2=$id'>reviews</a><br/>";
		}
		}
		}
$dbLink->close();
		?>
<p id="text"></p>
	</div>
   </body>
   </html>