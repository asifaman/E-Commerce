<?php
session_start();
//*****session_destroy() will destroy the session
session_destroy();
 
header("location:../login.php");
 
?>