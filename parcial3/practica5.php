<?php

    $cuadros = S_POST("cuadro");

    for($i=0; $i<count($cuadros); $i++){
        echo $cuadros($i). "."
        if($cuadros[$i] =! "x" || $cuadros[$i] =! "O"){
            echo "<h2>Solo se permiten X y/o O</h2>"
            return;
        } 
    }
    /=

        [0][1][2]
        [ ][ ][ ]
        [ ][ ][ ]
    =/
    if($cuadros(0) =="x" && $cuadros[1] == "x" && $cuadros(2) == "x"){
        echo"<h1>=Ganador (X)</h1>";
        return;
    } else if($cuadros(0) =="O" && $cuadros[1] == "O" && $cuadros(2) == "O"){
        echo"<h1>Ganador (O)</h1>"; 
}
/=

        [ ][ ][ ]
        [3][4][5]
        [ ][ ][ ]
=/

    ?>
