<!doctype html>

<html lang="en">
    <head>
        <title>
            LOGIN:
        </title>
        <style type='text/css'>
            body{
                background-image:url(ad.jpg);
                
            }
        </style>
      <meta charset="utf-8" />
 <link rel="stylesheet" href="main.css"/>  
    </head>
    <body>
	<center><img src='nit.jpg' height=250px width=250px /></center> 
	<div id="box">
	 <p id="text"></p>
	<nav id="top">

	 <ul>
		     <li><a href="a.php">Home</a></li>
			 <li><a href="login1.php">log in</a></li>
			 <li><a href="about_us.php">about us</a></li>
			 </ul>
			 </nav>
	  </br>
        <form action="process1.php" method='post'>
           username:<input type='text'  name='username'  value='' /> </br>
			</br>
            password:<input type='password' name='password' value='' /> </br>
			</br>
            login as:<select name='login_as'>
                <option>student</option>
                <option>dean</option>
                <option>reviewer</option>
                <option>supervisor</option>
                <option>chairman</option>
                <option>director</option>                       
				</br>
				
                
            </select></br>
			</br>
            <input type='submit' name='submit' value='submit' />
        </form>
	</div>	
    </body>
</html>
