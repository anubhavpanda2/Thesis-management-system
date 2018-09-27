<html>
<html lang="en">
<head>
   <style type="text/css">
    body{

	 background-image:url('supervisor.jpg')
	}  
  </style>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="chairman.css"/>
</head>
<body>
  <center><div id="b"><img  src='banner2.jpg' height=40% width=100% /></div></center>
<center><h1>Welcome</h1></center> 
<cENTER> <a href="logout.php">logout</a></CENTER> 
   <div id="box">
   <H3>STATUS OF THESIS</H3>
<BR/>   
   <?php
session_start();
// Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', '', 'sanjit');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
if(!isset($_SESSION['login_super']) || $_SESSION['login_super'] != true)
	{
	      header('Location:index.html');
	}

 
// Query for a list of all existing files
$sql = 'SELECT `studname`, `topic`,`id`,`roll` FROM `stud2`where `status`=0 and `branch`="EC"';
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
		
            echo "
                
                    <a href='ec.php?id={$row['roll']}'>{$row['roll']}</a>
                    {$row['topic']}<br/>";
                   
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
    <H3>THESIS REJECTED BY THE CHAIRMAN</H3> 
	<?php
// Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', '', 'sanjit');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
// Query for a list of all existing files
$sql = 'SELECT `studname`, `topic`,`id`,`roll`,`text` FROM `stud2`where `status`=6 and `branch`="EC"';
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
            echo "
                    <a href='ec.php?id={$row['roll']}'>{$row['roll']}</a>
                    {$row['topic']}<br/>";
                   
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
   </body>
   </html>
