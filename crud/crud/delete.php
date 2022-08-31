<?php 


include "insert.php";

$del = $_GET['uid'];

$obj = new Insert();
$obj->delete($del);




header("location:index.php");