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
<b id="welcome">Welcome : <i><?php echo $login_session," ",$_SESSION["type"]," ",$_SESSION["uid"]; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
<ul>
  <li><a class="active" href= "profile2.php"/>Home</a></li>
  <li><a href= " student_personal.php ">Student Personal Information</a></li>
  <li><a href= " student_academic.php ">Student Academic Information</a></li>
</ul>
</div>
<form action= " course_update.php " method="post">
  <fieldset style="width:270px">
    <legend>Course_Updation:</legend>
    Course Id   :<br>
    <input type="text" name= "cid"  value=" " style="width:260px"><br>
    Course Name :<br>
    <input type="text" name= "cname"  value=" " style="width:260px"><br>
    Professor Name :<br>
    <input type="text" name= "prof"  value=" " style="width:260px"><br>
    Prof Id :<br>
    <input type="text" name= "profid"  value=" " style="width:260px"><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>
</body>
</html>