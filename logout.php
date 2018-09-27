<?php

session_start();
if(isset($_SESSION['login_stud']))
{
unset($_SESSION['login_stud']);
header('LOCATION: index.html');
}
if(isset($_SESSION['login_dir']))
{
unset($_SESSION['login_dir']);
header('LOCATION: index.html');
}
if(isset($_SESSION['login_super']))
{
unset($_SESSION['login_super']);
header('LOCATION: index.html');
}
if(isset($_SESSION['login_cha']))
{
unset($_SESSION['login_cha']);
header('LOCATION: index.html');
}
if(isset($_SESSION['login_rev']))
{
unset($_SESSION['login_rev']);
header('LOCATION: index.html');
}
?>