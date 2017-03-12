<?php
 session_start();

require_once 'Hey.php';

$hey=new Hey();

$name= htmlentities($_POST['name']);


$hey->saveName($name);

header("Location:participate.php");

exit;
?>