<!doctype html>
<html>
    <head>
       
        </head>
    
<body>     
<?php
$dept=$_POST['dept'];

                switch ($dept) {
    case 'CS' : header('Location: cs.php');
  
    break;
    case 'EE':header('Location: ee.php');
        break;
		
    case 'ME':header('Location: me.php');
        break;
    case 'EC':header('Location: ec.php');
        break;
		}
  ?>
  </body>
  </html>
