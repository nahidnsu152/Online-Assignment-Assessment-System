<?php 
include("config/connect.php");
session_start();
session_unset();

header("location:index.php?logout=You Are Logout!");






?>