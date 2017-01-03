<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: index1.php"); 
//Redirecting To Home Page
}
?>

</body>
</html>