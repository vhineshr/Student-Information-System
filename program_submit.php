<?php
include('session2.php');
?>
<?php
session_start();
$u=$_SESSION['uid'];
$uid=$_POST['uid'];
$program=$_POST['program'];
$uid=stripslashes($uid);
$program= stripslashes($program);
$uid=mysql_real_escape_string($uid);
$program=mysql_real_escape_string($program);
$usename =root;
$pasword =root;
$connection = mysql_connect($servername, $usename, $pasword);
$db = mysql_select_db("stud", $connection);
mysql_query(" UPDATE ACADEMIC SET PROGRAM = '$program' WHERE UID=$uid ",$connection);
mysql_close($connection);
?>
<html>
<body>
<p>Successfully updated changes!!<a href= " profile2.php ">
   <button>Click here to go back!</button>
</a></p>
</body>
</html>
