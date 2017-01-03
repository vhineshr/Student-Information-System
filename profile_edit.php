<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session," ",$_SESSION["type"]," ",$_SESSION["uid"]; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<form action= "profile_submit.php" method="post">
  <fieldset style="width:270px">
    <legend>Personal information:</legend>
    Univ Id   :<br>
    <input type="text" name= "uid" disabled="disabled" value="<?php echo $ass['UID'];?>" style="width:260px"><br>
    First Name :<br>
    <input type="text" name="firstname" disabled="disabled" value="<?php echo $ass['NAME1'];?>" style="width:260px"><br>
    Birth Date :<br>
    <input type="text" name= "dob" disabled="disabled" value="<?php echo $ass['DOB1'];?>" style="width:260px"><br>
    Address   :<br>
    <input type="text" name= "address" value="<?php echo $ass['ad'];?>" style="width:260px"><br>
    Phone No  :<br>
    <input type="text" name= "phone" value="<?php echo $ass['phone1'];?>" style="width:260px"><br>
    Emergency :<br>
    <input type="text" name= "emergency" value="<?php echo $ass['er'];?>" style="width:260px"><br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>
</body>
</html>