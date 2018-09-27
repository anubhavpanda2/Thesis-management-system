<?php
// Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', '', 'sanjit');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
// Query for a list of all existing files
$sql = 'SELECT `studname`, `roll`, `branch`,`topic`, `created` FROM `stud2`';
$result = $dbLink->query($sql);
 
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
        echo '<table width="100%" border=1 >
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Roll No</b></td>
                    <td><b>Branch</b></td>
                    <td><b>Topic</b></td>
					<td><b>Date Of Submission</b></td>
					
                </tr>';
 
        // Print each file
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td>{$row['studname']}</td>
                    <td>{$row['roll']}</td>
					<td>{$row['branch']}</td>
					<td>{$row['topic']}</td>
                    <td>{$row['created']}</td>
				
                   
                </tr>";
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