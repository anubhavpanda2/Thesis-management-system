<html>
<html lang="en">
<head>
   <style type="text/css">
    body{
	 background-image:url(ll.jpg)
	 
	}  
  </style>
<?php
session_start();
// Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', '', 'sanjit');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
if(!isset($_SESSION['login_cha']) || $_SESSION['login_cha'] != true)
	{
	      header('Location:index.html');
	}
 
// Query for a list of all existing files
$sql = 'SELECT `studname`, `topic`,`id`,`roll`,`status` FROM `stud2`';
$result = $dbLink->query($sql);
 
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
		echo "<H3> THESIS INFORMATION</H3> <BR/>";
		echo "<cENTER> <a href=\"logout.php\">logout</a></CENTER>";
        echo '<table width="100%" border=1>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Topic </b></td>
                    <td><b>File</b></td>
                    
                </tr>';
 
        // Print each file
        while($row = $result->fetch_assoc()) {
		$status=$row['status'];
		if($status==1)
		{
            echo "
                <tr>
                    <td><a href='chairman3.php?id={$row['roll']}'>{$row['studname']}</a></td>
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
$dbLink->close();
?>

</div>
   </body>
   </html>
   