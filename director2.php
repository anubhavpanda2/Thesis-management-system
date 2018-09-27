<html>
<html lang="en">
<head>
   <style type="text/css">
	 body{background-image:url(director.jpg)
	}
  </style>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="chairman.css"/>
</head>
<body>
  <center><div id="b"><img  src='banner2.jpg' height=40% width=100% /></div></center> 
   <center><a href="logout.php">logout</a><center>
   <?php
   $roll=$_GET['id'];
   ?>
   
<?php
 session_start();
//include 'login1.php';
//include 'process2.php';
 
//$id1=$_SESSION1['password'];
 //echo "NAME:          ".$id."</br>";
//echo "PASSWORD:          ".$id1;
//echo "<a href ='student_detail.php?id={$db_username}'>Thesis submission</a>";
//$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	//mysql_select_db("sanjit") or die ("couldnt find the db");
/*	$que="INSERT into stud1 values('caman','ca','student')";
   if( mysql_query($que)){}
   else
   echo "failed";*/
   //$query = mysql_query("select status from stud2 where roll=$roll");
   
	//$id = $row['status'];
	//$id+=1;
	$dbLink = new mysqli('127.0.0.1', 'root', '', 'sanjit');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 if(!isset($_SESSION['login_dir']) || $_SESSION['login_dir'] != true)
	{
	      header('Location:index.html');
	}
// Query for a list of all existing files
$sql = "select studname,topic, branch,email,id from stud2 where roll='$roll'";
$result = $dbLink->query($sql);

	//$query = mysql_query("select studname,topic, branch,email from stud2 where roll='$roll'");

	$row = $result->fetch_assoc();
	$name=$row['studname'];
	$topic=$row['topic'];
	$branch=$row['branch'];
	$email=$row['email'];
	$id=$row['id'];
	echo "NAME:". $name." </BR>";
	echo "ROLL:".$roll."</BR>";
	echo "BRANCH: ".$branch."</BR>";
	echo "MAIL: ".$email."</BR>";
	echo "<a href='download.php?id={$id}'>CLICK HERE TO Download :THESIS</a>";
	//$query = mysql_query("select username ,comment  from pre_rev where roll='$roll'");
	echo"<div id=\"box\">";
	$sql = "select username ,comment,rating  from pre_rev where roll='$roll' and type=1 and score in (7,8,9,10,11,12,13,14,15,16)";
$result = $dbLink->query($sql);
 
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
        echo '<table width="100%" border=1>
                <tr>
                    <td><b>REVIEWR_NAME</b></td>
					<td><b>PRIORITY</b></TD>
                </tr>';
 
        // Print each file
		//echo"<form method=\'post\' action=\'process20.php\'>";
        while($row = $result->fetch_assoc()) {
       //$query1 = mysql_query("select * from pre_rev where roll='$roll' and username={$row['username']} "); 
                 //  $row1 = mysql_fetch_assoc($query1);
			//$score = $row1['score'];
		//	echo $score;
			{
            echo "
			<form method='post' action='process20.php?id=$roll & id1={$row['username']} '>
                <tr>
                    <td>{$row['username']}</td>
            
				 <td> <select name='rating' >
                <option>1</option>
                
                <option>2</option>
                <option>3</option>
                <option>4</option>
				<option>5</option>
            </select>
                  </td>
<td>
<input type='submit' name='submit' value='submit' >
</td>	
</form>			  
                </tr>";
				}
        }
		        // Close table
				
        echo '</table>';
		
    }

	}
	echo"</div>";
	echo"<div id=\"box1\">";
	/*$sql = "select studname,topic, branch,email,id from stud2 where roll='$roll'";
$result = $dbLink->query($sql);

	//$query = mysql_query("select studname,topic, branch,email from stud2 where roll='$roll'");

	$row = $result->fetch_assoc();
	$name=$row['studname'];
	$topic=$row['topic'];
	$branch=$row['branch'];
	$email=$row['email'];
	$id=$row['id'];
	echo "NAME:". $name." </BR>";
	echo "ROLL:".$roll."</BR>";
	echo "BRANCH: ".$branch."</BR>";
	echo "MAIL: ".$email."</BR>";
	echo "<a href='download.php?id={$id}'>CLICK HERE TO Download :THESIS</a>";*/
	//$query = mysql_query("select username ,comment  from pre_rev where roll='$roll'");
	
	$sql = "select username ,comment,rating  from pre_rev where roll='$roll' and type=2 and score in (7,8,9,10,11,12,13,14,15,16)";
$result = $dbLink->query($sql);
 
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
        echo '<table width="100%" border=1>
                <tr>
                    <td><b>REVIEWR_NAME</b></td>
					<td><b>PRIORITY</b></TD>
                </tr>';
 
        // Print each file
		//echo"<form method=\'post\' action=\'process20.php\'>";
        while($row = $result->fetch_assoc()) {
       //$query1 = mysql_query("select * from pre_rev where roll='$roll' and username={$row['username']} "); 
                 //  $row1 = mysql_fetch_assoc($query1);
			//$score = $row1['score'];
		//	echo $score;
			{
            echo "
			<form method='post' action='process20.php?id=$roll & id1={$row['username']} '>
                <tr>
                    <td>{$row['username']}</td>
            
				 <td> <select name='rating' >
                <option>1</option>
                
                <option>2</option>
                <option>3</option>
                <option>4</option>
				<option>5</option>
            </select>
                  </td>
<td>
<input type='submit' name='submit' value='submit' >
</td>	
</form>			  
                </tr>";
				}
        }
		        // Close table
				
        echo '</table>';
		
    }

	}
echo "</div>";
	/*echo"<form method='post' action='process22.php?id=$roll '>
	<input type='submit' name='submit' value='submit' >
	</form>";
	echo"<form method='post' action='process23.php?id=$roll'>
	<input type='submit' name='submit' value='submit' >
	</form>";*/
//header('location:chairman2.php');
?>

		


<p id="text"></p>
	</div>
      </body>
   </html>