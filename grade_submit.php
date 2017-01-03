<?php
include('session1.php');
?>
<?php
session_start();
$u=$_SESSION['uid'];
$uid=$_POST['uid'];
$grade =$_POST['grade'];
$uid=stripslashes($uid);
$grade= stripslashes($grade);
$uid=mysql_real_escape_string($uid);
$grade=mysql_real_escape_string($grade);
$usename =root;
$pasword =root;
$connection = mysql_connect($servername, $usename, $pasword);
$db = mysql_select_db("stud", $connection);
mysql_query("UPDATE GRADES SET GRADE= AES_ENCRYPT('$grade','hello') WHERE UID=$uid AND PROFID=$u",$connection);
mysql_close($connection);
?>
<html>
<body>
<p>Successfully updated changes!!<a href= " profile1.php ">
   <button>Click here to go back!</button>
</a></p>
</body>
</html>
