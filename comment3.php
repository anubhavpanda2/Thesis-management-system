<html>
<head>
</head>
<body>
<?php
 session_start();
 $roll1=$_GET['id1'];
 $id2=$_GET['id2'];
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("sanjit") or die ("couldnt find the db");
	?>
<form action="process30.php?id=<?php echo $roll1 ?> & id2=<?php echo $id2 ?>" method="post">
<textarea name="comment" rows="8" cols="20">
type here
</textarea>

<input type='submit' name='submit' value='submit' />
</form>
</html>