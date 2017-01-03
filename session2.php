<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
session_start();
$servername = "localhost";
$usename =root;
$pasword =root;
$connection = mysql_connect($servername, $usename, $pasword);
// Selecting Database
$db = mysql_select_db("stud", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select uname from users where uname='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['uname'];
if((!isset($login_session)) || ($_SESSION["type"]!="proghead"))
{
mysql_close($connection); // Closing Connection
header("Location: index1.php"); // Redirecting To Home Page
}
?>