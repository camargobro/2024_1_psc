<?php

        echo ("Lista de carros: <hr>");
    
    $carros = array("Doblo" , "Opala" , "Renegade");
    foreach($carros as $lista_de_carros){
        print($lista_de_carros . "<br>");
        
    }
        echo("<hr>");
        print_r($carros);
        echo("<hr>");
        var_dump($carros);

        $carros[0] = "Uno";
        echo "<hr>";
        var_dump($carros);
?>



    

