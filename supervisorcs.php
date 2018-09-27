<html>
<html lang="en">
<head>
   <style type="text/css">
    body{
	 background-image:url(ad.jpg);
	 
	}  
  </style>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="chairman.css"/>
</head>
<body>
  <img  src='banner2.jpg' height=40% width=100% /> 
   <div id="box">
   <?php
session_start();
// Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', '', 'sanjit');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
// Query for a list of all existing files
$sql = 'SELECT `topic`,`roll`,`status`,`branch` FROM `stud2`';
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
		   if(($row['status']==6 )|| ($row['status']==0))
		   {
		     if($row['branch']=="CSE")
            {
			 echo "
                
                    <a href='cs.php?id='{$row['roll']}'>{$row['roll']}</a>
                    {$row['topic']}";
            }   
			}
        }
        // Close table
		}
       
    }
?>
    <a href="chairman2.php">STATUS OF THESIS</a> 
     <p id="text"></p>
	</div>
   </body>
   </html>
