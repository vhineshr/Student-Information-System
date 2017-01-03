<?php
include('session2.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

a:hover:not(.active) {
    background-color: #111;
}

.active {
background-color:#4FFFF0;
}
</style>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session," ",$_SESSION["type"]; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<ul>
  <li><a href= "profile2.php"/>Home</a></li>
  <li><a class="active" href= " student_personal.php ">Student Personal Information</a></li>
  <li><a href= " student_academic.php ">Student Academic Information</a></li>
</ul>
<table>
    <tr>
        <th>Uid</th>
        <th>Name</th>
        <th>Dob</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Emergency</th>
    </tr>
    <?php
            $us=$_SESSION['uid'];
            $usename =root;
            $pasword =root;
            $connection = mysql_connect($servername, $usename, $pasword);
            // Selecting Database
            $db = mysql_select_db("stud", $connection);
            $rs = mysql_query("select * ,CAST(AES_DECRYPT(NAME, 'hello') AS CHAR(50))NAME1,CAST(AES_DECRYPT(DOB, 'hello') AS CHAR(50))DOB1,CAST(AES_DECRYPT(ADDRESS, 'hello') AS CHAR(50))ad,CAST(AES_DECRYPT(PHONE, 'hello') AS CHAR(50))phone1,CAST(AES_DECRYPT(EMERGENCY, 'hello') AS CHAR(50))er  from PERSONAL", $connection);
            while($rw = mysql_fetch_array($rs)) {
                echo "\t<tr><td>".$rw['UID']. "</td><td>".$rw['NAME1']."</td><td>&nbsp; ".$rw['DOB1']."</td><td>&nbsp; ".$rw["ad"]."</td><td>&nbsp; ".$rw['phone1']."</td><td>&nbsp; ".$rw['er']. "</td></tr>\n";
            }
            mysql_close($connection);
    ?>

</table>
</body>
</html>