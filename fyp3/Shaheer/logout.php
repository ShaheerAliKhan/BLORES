<?php

session_start();
// mysql_close($con);
unset($_SESSION['loged_in']);

session_destroy();

header("Location:login.php");	


?>