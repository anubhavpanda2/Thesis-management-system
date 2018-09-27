<html>
<head>
 <style type="text/css">
	body{ background-image:url(student.jpg)
	}
 </style>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="slogin.css"/>
</head>
<body>
<center><img src='sar.jpg' height=250px width=250px /></center> 
<h3 id="box"> STUDENT DETAILS 
<div id="text">
<a href="logout.php">logout</a>
</div>

<form action="process4.php" method='post' enctype="multipart/form-data">
<pre>
<h3>
NAME:    <input type="text" name="name" size="40" />
ROLL:    <input type="text" name="roll" size="40"/>
EMAIL:   <input type="text" name="MAIL" size="40" />
TOPIC:   <input type="text" name="TOPIC" size="40" /></h3></pre>
BRANCH:  <select name='branch'>
		<option>CSE</option>
		<option>EE</option>
		<option>ME</option>
		<option>EC</option>
		</select>

<p>	
PROGRAMME:
	B.TECH<input type="radio" name="programme" value="B.TECH">
	
	M.TECH<input type="radio" name="programme" value="M.TECH">
	<br/>

<h3>SYNOPSIS</h3>
	<input type="file" name="uploaded_file"/>
	 <input type='submit' name='submit' value='submit' />
	<br/>
	</h3>
	</p>
	</form>
	
</body>
</html>