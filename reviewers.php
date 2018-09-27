<?php
session_start();
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
$roll=$_GET['id'];
    $query=mysql_query("select * from reviewer1 where roll='$roll'");
	$array2=array('ram','ram','ram','ram','ram','ram','ram','ram','ram','ram');
	$i=0;
	//echo $i;
    while($row=mysql_fetch_assoc($query))
	{
	$a= $row['reviewername'];
	$array2[$i] ="$a";
	//echo $a;
	//echo $array2[$i];
	//echo $i;
	$i +=1;	
    /*$rev1=$row['reviewer1'];
    $rev2=$row['reviewer2'];
    $rev3=$row['reviewer3'];
    $rev4=$row['reviewer4'];*/
	}
	$query=mysql_query("select * from stud2 where roll='$roll'");
	$row=mysql_fetch_assoc($query);
    $rev5=$row['topic'];
	//echo $rev5;
	//echo $rev1;
mysql_query("insert into pre_rev values ('$array2[0]','$roll','$rev5',null,0,7,1)");
mysql_query("insert into pre_rev values ('$array2[1]','$roll','$rev5',null,0,8,1)");
mysql_query("insert into pre_rev values ('$array2[2]','$roll','$rev5',null,0,9,1)");
mysql_query("insert into pre_rev values ('$array2[3]','$roll','$rev5',null,0,10,1)");
mysql_query("insert into pre_rev values ('$array2[4]','$roll','$rev5',null,0,11,1)");
mysql_query("insert into pre_rev values ('$array2[5]','$roll','$rev5',null,0,12,2)");
mysql_query("insert into pre_rev values ('$array2[6]','$roll','$rev5',null,0,13,2)");
mysql_query("insert into pre_rev values ('$array2[7]','$roll','$rev5',null,0,14,2)");
mysql_query("insert into pre_rev values ('$array2[8]','$roll','$rev5',null,0,15,2)");
mysql_query("insert into pre_rev values ('$array2[9]','$roll','$rev5',null,0,16,2)");

//$query=mysql_query("select email from stud2 where roll='$roll'");
//$row = mysql_fetch_assoc($query);
/*$email=$row['email'];
echo $email;
/*require_once("PHPMailer_v5.1\class.phpmailer.php");
   require_once("PHPMailer_v5.1\class.smtp.php");
   require_once("PHPMailer_v5.1\language\phpmailer.lang-es.php");*/

/*$sub="request";
   $fromname="nit";
  
   $from="dashsanjit92@gmail.com";
    $header="From:".$from;
   $message="please submit your thesis as soon as posible ";
   $message=wordwrap($message,70);
   $sub="nitrkl";
  // $to_name="111cs0044";
mail($email,$sub,$message,$header);*/
  // $mail= new PHPMailer();
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
	/*$sub="ejbhdjbhjbdv";
	
   $mail->FROMNAME="dashsanjit92@gmail.com";
   $mail->From ="dashsanjit92@gmail.com";
   $to_name="dashsanjit92@gmail.com";
   $mail->AddAddress($email,$to_name);
   $mail->IsHTML(false);
   $mail->subject=$sub;
   $mail->body=$message;
   $header='from: nitrkl.ac.in';  
 $result= $mail->send();
echo $result?'sent':'error';*/

/*mysql_query("insert into pre_rev values ('$rev2','$roll','$rev5',null,0,8)");
mysql_query("insert into pre_rev values ('$rev3','$roll','$rev5',null,0,9)");
mysql_query("insert into pre_rev values ('$rev4','$roll','$rev5',null,0,10)");*/
mysql_query("update stud2 set status=10 where roll='$roll'");
header('location:dean2.php');
?>
