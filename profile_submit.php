<?php
include('session.php');
?>
<?php
session_start();
$u=$_SESSION['uid'];
$address=$_POST['address'];
$phone  =$_POST['phone'];
$emergency=$_POST['emergency'];
$address=stripslashes($address);
$phone = stripslashes($phone);
$emergency = stripslashes($emergency);
$address=mysql_real_escape_string($address);
$phone =mysql_real_escape_string($phone);
$emergency= mysql_real_escape_string($emergency);
$usename =root;
$pasword =root;
$connection = mysql_connect($servername, $usename, $pasword);
$db = mysql_select_db("stud", $connection);
mysql_query("UPDATE PERSONAL SET ADDRESS= AES_ENCRYPT('$address','hello'), PHONE= AES_ENCRYPT('$phone', 'hello'), EMERGENCY=AES_ENCRYPT('$emergency', 'hello') WHERE UID=$u",$connection);
mysql_close($connection);
?>
<html>
<body>
<p>Successfully updated changes!!<a href= " profile.php ">
   <button>Click here to go back!</button>
</a></p>
</body>
</html>