<html>
<head>
<style type="text/css">
	body{ background-image:url(ll.jpg)
	}
  
 </style>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="chairman.css"/>
</head>
<body>
<center><img src='nit.jpg' height=250px width=250px /></center>
<div id="box">
<h2>REASONS</h2>

<?php
 $roll1=$_GET['id'];
 ?>
<form action="process11.php?id=<?php echo $roll1?>" method="post">
<textarea name="comment" rows="8" cols="20">
PLEASE GIVE SOME COMMENTS
</textarea>
<input type='submit' name='submit' value='submit' />
</form>

</div>
</body>
</HTML>