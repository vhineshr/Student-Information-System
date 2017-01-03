<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$servername = "localhost";
$usename =root;
$pasword =root;
$connection = mysql_connect($servername, $usename, $pasword);
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("stud", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from users where password='$password' AND uname='$username'", $connection);
$rows = mysql_num_rows($query);
$ass = mysql_fetch_assoc($query);
$type = $ass['type'];
$_SESSION["type"] = $type;
$_SESSION["uid"] = $ass['uid'];
if (($rows == 1) AND ($type == 'student')) {
$_SESSION['login_user']=$username; // Initializing Session
header('Location: profile.php'); // Redirecting To Other Page
}
elseif(($rows == 1) AND ($type == 'professor'))
{
$_SESSION['login_user']=$username; // Initializing Session
header('Location: profile1.php');
}
elseif(($rows == 1) AND ($type == 'proghead'))
{
$_SESSION['login_user']=$username; // Initializing Session
header('Location: profile2.php');
}
else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>