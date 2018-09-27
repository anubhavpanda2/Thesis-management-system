<!doctype html>
<html>
    <head>
       
        </head>
    
<body>     
<?php
$username=$_POST['username'];
$password=$_POST['password'];
$login_as=$_POST['login_as'];
        if($username=='a')
        {
            if($password=='a')
            {
                switch ($login_as) {
    case 'student' : header('Location: student_login.php');
  
    break;
    case 'supervisor':header('Location: student_login.php');
        break;
		
    case 'dean':header('Location: student_login.php');
        break;
    case 'reviewer':header('Location: student_login.php');
        break;
    case 'chairman':header('Location: student_login.php');
        break;
   
        }
        
                }
            else  
            {
             header('location:error1.php');}
        }else  
            {
             header('location:error1.php');}
?>

</body>
    
</html>