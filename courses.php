<?php
include('session.php');
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
<b id="welcome">Welcome : <i><?php echo $login_session," ",$_SESSION["type"]," ",$_SESSION["uid"]; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<ul>
  <li><a href= "profile.php"/>Home</a></li>
  <li><a href= " academic.php ">Academic</a></li>
  <li><a class="active" href= "courses.php ">Courses offered</a></li>
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
                echo "\t<tr><td>".$rw['CID']."</td><td>".$rw['CNAME']."</td><td>".$rw['PROF']. "</td></tr>\n";
            }
            mysql_close($connection);
    ?>
</table>

</body>
</html>