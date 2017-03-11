<?php
        require_once 'classes/Dao.php';
        $dao = new Dao();

        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);
        $comments = htmlentities($_POST['comments']);
        

        $monday = htmlentities($_POST['monday']);
        $tuesday = htmlentities($_POST['tuesday']);
        $wednesday = htmlentities($_POST['wednesday']);
        $thursday = htmlentities($_POST['thursday']);
        $friday = htmlentities($_POST['friday']);
        $saturday = htmlentities($_POST['saturday']);
        $sunday = htmlentities($_POST['sunday']);
        
        $availability = "";
        
            if (isset($monday)){
                $availability .=  "Monday";
            }
            if (isset($tuesday)){
                $availability .=  "Tuesday";
            }
            if (isset($wednesday)){
                $availability .=  "Wednesday";
            }
            if (isset($thursday)){
                $availability .=  "Thursday";
            }
            if (isset($friday)){
                $availability .=  "Friday";
            }
            if (isset($saturday)){
                $availability .=  "Saturday";
            }
            if (isset($sunday)){
                $availability .=  "Sunday";
            }

                
        

        $dao->saveRequest($name, $class, $availability, $contactinfo, $comments);

        header("Location:partivipate.php");
        exit;
?>
