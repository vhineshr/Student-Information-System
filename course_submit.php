<?php
include('session2.php');
?>
<?php
session_start();
$u=$_SESSION['uid'];
$cid=$_POST['cid'];
$cname=$_POST['cname'];
$prof=$_POST['prof'];
$profid=$_POST['profid'];
$cid=stripslashes($cid);
$cname= stripslashes($cname);
$prof = stripslashes($prof);
$profid= stripslashes($profid);
$cid=mysql_real_escape_string($cid);
$cname=mysql_real_escape_string($cname);
$prof=mysql_real_escape_string($prof);
$profid=mysql_real_escape_string($profid);
$usename =root;
$pasword =root;
$connection = mysql_connect($servername, $usename, $pasword);
$db = mysql_select_db("stud", $connection);
mysql_query("INSERT INTO COURSE VALUES('$cid', '$cname', '$prof',$profid)",$connection);
mysql_close($connection);
?>
<html>
<body>
<p>Successfully updated changes!!<a href= " profile2.php ">
   <button>Click here to go back!</button>
</a></p>
</body>
</html>
