<?php

session_start();
// mysql_close($con);
unset($_SESSION['logged_in']);

session_destroy();

header("Location:index.php");	


?>