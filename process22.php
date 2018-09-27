<html>
<head>
</head>
<body>
<?php
 session_start();
//include 'login1.php';
//include 'process2.php';
 $roll=$_GET['id'];
 //$name=$_GET['id1'];
//$status=$_POST['rating'];
//echo $status;
 //echo $roll;
 //echo $name;
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
  require_once("PHPMailer_v5.1\class.phpmailer.php");
   require_once("PHPMailer_v5.1\class.smtp.php");
   require_once("PHPMailer_v5.1\language\phpmailer.lang-es.php");
 $query = mysql_query("select email from reviewer1,pre_rev where pre_rev.roll='$roll' and username=reviewername and score=1 and type=1 ");
   $row = mysql_fetch_assoc($query);
   $email =$row['email'];
 /*  $to = $email;
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "someonelse@example.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";*/
  // $name=$row['username'];
   $sub="request";
   $fromname="nit";
   $from="anubhavpanda2@gmail.com";
   $message="press ";
   $message=wordwrap($message,70);
   $to_name="111cs0044";
   $mail= new PHPMailer();
//   $body             = file_get_contents('a.html');
//$body             = preg_replace('/[\]/','',$body);
 //$mail->MsgHTML($body);
//var_dump($body);
   /* $mail->IsSMTP();

    $mail->SMTPAuth   = true;

    $mail->SMTPSecure = "ssl";
    $mail->Host       = "rsb20.rhostbh.com";
    $mail->Port       = 465;
    $mail->Username   = "jobserreker+furrtexlab.com";
    $mail->Password   = "12345678a";

    $mail->From       = "jobserreker@furrtexlab.com";
    $mail->FromName   = "Job Seeker";*/
   $mail->FROMNAME=$fromname;
   $mail->From =$from;
   $mail->AddAddress($email,$to_name);
   $mail->IsHTML(false);
   $mail->subject=$sub;
   $mail->body=$message;
   $header='from: nitrkl.ac.in';  
 $result= $mail->send();
echo $result?'sent':'error';
  // mail($email,$sub,$message,$header);
   $query = mysql_query("select email from reviewer1,pre_rev where pre_rev.roll='$roll' and username=reviewername and score=1 and type=2 ");
   $row = mysql_fetch_assoc($query);
   $email1 = $row['email'];
 //  $name1=$row['username'];
 
 // mail($email1,$sub,$message,$header); 
//	$id+=1;
//	$query = mysql_query("update stud2 set text1='$name1',status=9 where roll='$roll'");
//header("location:director2.php?id=$roll");
?>
