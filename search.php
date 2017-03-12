<?php include("header.php");
?>
 <style>
    .hey{
    padding-top: 10px;
        margin-left: auto;
        margin-right:auto; 
}
  

</style>  
<?php 
 require_once 'Dao.php';

    require_once 'Output.php';
    $dao = new Dao();
    $dao->getConnection();

    
?>
<body>
<div class="hey"> 
      <?php Output::outputTable($dao->getRequest());?>

</div>
    </body>
<?php include("footer.php");
?>

