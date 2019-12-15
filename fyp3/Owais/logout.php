<?php

session_start();
unset($_SESSION['loged_in']);

session_destroy();

header("Location:login.php");	


?>