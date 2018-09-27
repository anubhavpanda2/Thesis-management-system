<!doctype html>
<html>
    <head>
        <title>
            whatevar
        </title>
        <style type='text/css'>
            body{
                background-image:url(alpha.jpg);
                background-position:0%
            }
        </style>
        
    </head>
    <body>
        <form action="process.php" method='post'>
            username:<input type='text' name='username' value='' /></br>
            password:<input type='password' name='password' value='' /></br>
            login as:<select name='login_as'>
                <option>student</option>
                <option>dean</option>
                <option>reviewer</option>
                <option>supervisor</option>
                <option>chairman</option>
                <option>director</option>
                
            </select></br>
            <input type='submit' name='submit' value='submit' />
        </form>
    </body>
</html>
