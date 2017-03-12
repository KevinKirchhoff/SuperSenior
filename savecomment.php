
<?php


require_once 'Dao.php';

$dao=new Dao();

$name= htmlentities($_POST['name']);
$email= htmlentities($_POST['email']);
$dropdown= htmlentities($_POST['dropdown']);
//var_dump($_POST["checkbox"]);
$hey = implode($_POST['comment']);
$availability= $hey;

 $dao->save($name,$email,$availability);




header("Location:participate.php");

exit;

