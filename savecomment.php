
<?php


require_once 'Dao.php';

$dao=new Dao();

$name= htmlentities($_POST['name']);
echo $name;
$dao->saveName($name);

header("Location:participate.php");

exit;

