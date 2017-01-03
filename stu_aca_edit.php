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
  <li><a href= "profile1.php"/>Home</a></li>
  <li><a href= " studentinfo.php ">Student Info</a></li>
  <li><a class="active" href= " grade_edit.php ">Update Grades</a></li>
</ul>
</table>
<form action= " program_submit.php" method="post">
  <fieldset style="width:270px">
    <legend>Program Updation:</legend>
    Univ Id   :<br>
    <input type="text" name= "uid"  value=" " style="width:260px"><br>
    Program :<br>
    <input type="text" name= "program"  value=" " style="width:260px"><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>
</body>
</html>