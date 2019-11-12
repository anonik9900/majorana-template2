<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login2.php");
}
?>

<html>
<head>
</head>
<body>


<form name="logout" action="login2.php" method="post">
<input type="hidden" name="logout" value="esci"/>
<input type="submit" value="Logout"/>
</form>


</body>
