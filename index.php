<?php

    


    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


    $mysqli = new mysqli("localhost","root","", "projettest");


    $result = $mysqli->query("SELECT *  FROM projet ORDER BY ID LIMIT 3");

     var_dump ($result) ;

      /*  */
      if  ($result->num_rows> 0){ 


     //$mysqli->close();

    
        foreach ($result as $rowprojetest) {

            echo $rowprojetest ["nom"] ;
        
            
        
    }
} else {
    echo "pas de news";

}


    




?>