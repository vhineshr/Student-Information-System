<?php
include('session1.php');
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
  <li><a class="active" href= "profile1.php"/>Home</a></li>
  <li><a href= " studentinfo.php ">Student Info</a></li>
  <li><a href= " grade_edit.php ">Update Grades</a></li>
</ul>
<table>
    <tr>
        <th>Course Id</th>
        <th>Course Name</th>
        <th>Professor</th>
    </tr>
    <?php
            $us=$_SESSION['uid'];
            $usename =root;
            $pasword =root;
            $connection = mysql_connect($servername, $usename, $pasword);
            // Selecting Database
            $db = mysql_select_db("stud", $connection);
            $rs = mysql_query("select * from COURSE ", $connection);
            while($rw = mysql_fetch_array($rs)) {
                echo "\t<tr><td>".$rw['CID']."</td><td>".$rw['CNAME']."</td><td>&nbsp; ".$rw['PROF']. "</td></tr>\n";
            }
            mysql_close($connection);
    ?>
</table>
<h3> My Courses </h3>
<table>
    <tr>
        <th>Course Id</th>
        <th>Course Name</th>
        <th>Professor</th>
    </tr>
    <?php
            $us=$_SESSION['uid'];
            $usename =root;
            $pasword =root;
            $connection = mysql_connect($servername, $usename, $pasword);
            // Selecting Database
            $db = mysql_select_db("stud", $connection);
            $rs = mysql_query("select * from COURSE WHERE PROFID=$us", $connection);
            while($rw = mysql_fetch_array($rs)) {
                echo "\t<tr><td>".$rw['CID']."</td><td>".$rw['CNAME']."</td><td>&nbsp; ".$rw['PROF']. "</td></tr>\n";
            }
            mysql_close($connection);
    ?>
</table>
</body>
</html>