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
$u=$_SESSION['uid'];
$query = mysql_query("select * ,CAST(AES_DECRYPT(NAME, 'hello') AS CHAR(50))NAME1,CAST(AES_DECRYPT(DOB, 'hello') AS CHAR(50))DOB1,CAST(AES_DECRYPT(ADDRESS, 'hello') AS CHAR(50))ad,CAST(AES_DECRYPT(PHONE, 'hello') AS CHAR(50))phone1,CAST(AES_DECRYPT(EMERGENCY, 'hello') AS CHAR(50))er  from PERSONAL where UID=$u", $connection);
$ass = mysql_fetch_assoc($query);
$sql = mysql_query("select * from ACADEMIC where UID=$u", $connection);
$aca = mysql_fetch_assoc($sql);
$login_session =$row['uname'];
if((!isset($login_session)) || ($_SESSION["type"]!="student"))
{
mysql_close($connection); // Closing Connection
header("Location: index1.php"); // Redirecting To Home Page
}
?>
