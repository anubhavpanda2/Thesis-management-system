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
<center><div id="b">
  <img  src='banner2.jpg' height=40% width=100% />
</div> </center> 
   <div id="box">
    <center><a href="logout.php">logout</a><center>
   <H3>STATUS OF THESIS</H3>
        
<BR/>   
   <?php
session_start();
// Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', '', 'sanjit');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
if(!isset($_SESSION['login_dir']) || $_SESSION['login_dir'] != true)
	{
	      header('Location:index.html');
	}
 
// Query for a list of all existing files
$sql = 'SELECT * FROM `stud2`where `status`=3 ';
$result = $dbLink->query($sql);
 
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table

                //<tr>
                  //  <td><b>Name</b></td>
                    //<td><b>Topic </b></td>
                    //<td><b>File</b></td>
                    
                //</t
 
        // Print each file
        while($row = $result->fetch_assoc()) {
		$status=$row['status'];
		if($status==3)
		{
            echo "
                
                    <a href='director1.php?id={$row['roll']}'>{$row['roll']}</a>
                    {$row['topic']}<br/>";
                   
        }
		}
        // Close table
       
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
$dbLink->close();
?>
     <p id="text"></p>
	</div>
	<div id="box1">
	 <H3>SELECT REVIEWERS</H3>
        
<BR/>   
   <?php
//session_start();
// Connect to the database

$dbLink = new mysqli('127.0.0.1', 'root', '', 'sanjit');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
if(!isset($_SESSION['login_dir']) || $_SESSION['login_dir'] != true)
	{
	      header('Location:index.html');
	}
 
// Query for a list of all existing files
$sql = 'SELECT distinct * FROM `stud2`,`pre_rev`where pre_rev.roll=stud2.roll and`status`=10  and score =7';
$result = $dbLink->query($sql);
 
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table

                //<tr>
                  //  <td><b>Name</b></td>
                    //<td><b>Topic </b></td>
                    //<td><b>File</b></td>
                    
                //</t
 
        // Print each file
        while($row = $result->fetch_assoc()) {
		$status=$row['status'];
		
	//	$result= mysql_query("select count(*) from pre_rev where roll={$row['roll']} and score!=0");
//$id2 = mysql_fetch_row($result[0]);
		if($status==10)
		{
            echo "
                
                    <a href='director2.php?id={$row['roll']}'>{$row['roll']}</a>
                    {$row['topic']}<br/>";
                   
        }
		}
        // Close table
       
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
$dbLink->close();
?>
</div>
      </body>
   </html>
