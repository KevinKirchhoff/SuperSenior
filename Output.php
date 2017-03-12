<?php class Output{
    public static function outputTable($rows){


    $table = "
        <table id = 'hey'>
            <thead>
                <tr>
                    <th>Why</th>
                    <th>Are</th>
                
                </tr>
            </thead>";
        foreach($rows as $row){
            $table .= "<tr><td>" . htmlentities($row['idClass']) . "</td><td>{$row['name']}</td></tr>";
        }
                $table.="</table>";
                echo $table;
    }

}?>