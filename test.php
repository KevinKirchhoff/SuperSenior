<?php 
    include("header.php");
    require_once 'Hey.php';
    require_once 'Output.php';
    $hey = new Hey();
    $hey->getConnection();
    
?>
<div> 
        <?php Output::outputTable($hey->getRequest());?>

</div>

