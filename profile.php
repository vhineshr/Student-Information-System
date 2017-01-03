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
  <li><a class="active" href= "profile.php"/>Home</a></li>
  <li><a href= " academic.php ">Academic</a></li>
  <li><a href= "courses.php ">Courses offered</a></li>
</ul>
<div style="float:left;">
<form action=" ">
  <fieldset style="width:270px">
    <legend>Personal information:</legend>
    Univ Id   :<br>
    <input type="text" name= "uid" disabled="disabled" value="<?php echo $ass['UID'];?>" style="width:260px"><br>
    First Name :<br>
    <input type="text" name="firstname" disabled="disabled" value="<?php echo $ass['NAME1'];?>" style="width:260px"><br>
    Birth Date :<br>
    <input type="text" name= "dob" disabled="disabled" value="<?php echo $ass['DOB1'];?>" style="width:260px"><br>
    Address   :<br>
    <input type="text" name= "address" disabled="disabled" value="<?php echo $ass['ad'];?>" style="width:260px"><br>
    Phone No  :<br>
    <input type="text" name= "phone" disabled="disabled" value="<?php echo $ass['phone1'];?>" style="width:260px"><br>
    Emergency :<br>
    <input type="text" name= "emergency" disabled="disabled" value="<?php echo $ass['er'];?>" style="width:260px"><br><br>
  </fieldset>

</form>
<a href= " profile_edit.php ">
   <input type="submit" value= "Edit Info">
</a>
</body>
</html>