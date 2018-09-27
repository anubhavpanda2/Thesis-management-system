<html>
<head>
<style type="text/css">
	body{ background-image:url(reviewer.jpg)
	}
  
 </style>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="chairman.css"/>
</head>
<body>
<center><img src='nit.jpg' height=250px width=250px /></center>
<div id="box">
<h2>REVIEWS</h2>

<?php
 $roll1=$_GET['id1'];
 $id2=$_GET['id2'];
 //echo $id2;
 session_start();
 $connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
mysql_query("update pre_rev set rating=1 where roll='$roll1' and username='$id2'");
 ?>
 <a href='download2.php?id=<?php echo $roll1;?>'>CLICK HERE TO Download :THESIS</a>
<form action="process7.php?id=<?php echo $roll1 ?> & id2=<?php echo $id2 ?>" method="post">
<textarea name="comment" rows="8" cols="20">
type here
</textarea>

<input type='submit' name='submit' value='submit' />
</form>
<?php
header('process7.php?id= $roll1 & id2=$id2');?>
</div>
</body>
</HTML>