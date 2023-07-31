<?php
session_start();
unset($_SESSION["student_reg_no"]);
session_destroy();
header("Location:../zonal-login.php");

?>