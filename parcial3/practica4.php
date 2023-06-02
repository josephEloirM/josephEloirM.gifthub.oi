<?php

$calificacion=0;
$Nombre = $_POST["Nombre"];
echo "<h3>Tu nombre es: ".$Nombre."<h3>" ;

$Pregunta1 = $_POST["Pregunta1"];
$Pregunta2 = $_POST["Pregunta2"];
$Pregunta3 = $_POST["Pregunta3"];
$Pregunta4 = $_POST["Pregunta4"];
$Pregunta5 = $_POST["Pregunta5"];
$Pregunta6 = $_POST["Pregunta6"];
$Pregunta7 = $_POST["Pregunta7"];
$Pregunta8 = $_POST["Pregunta8"];
$Pregunta9 = $_POST["Pregunta9"];
$Pregunta10 = $_POST["Pregunta10"];


echo "<h3>Pregunta 1, respuesta seleccionada: (".$Pregunta1.")</h3>";
if($Pregunta1=="b"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 2, respuesta seleccionada: (".$Pregunta2.")</h3>";
if($Pregunta2=="a"){
    $calificacion++; 
    echo "<img src='correcta.png' width='3%'><hr>";       
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 3, respuesta seleccionada: (".$Pregunta3.")</h3>";
if($Pregunta3=="a"){
    $calificacion++;   
    echo "<img src='correcta.png' width='3%'><hr>";     
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 4, respuesta seleccionada: (".$Pregunta4.")</h3>";
if($Pregunta4=="c"){
    $calificacion++;        
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 5, respuesta seleccionada: (".$Pregunta5.")</h3>";
if($Pregunta5=="b"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 6, respuesta seleccionada: (".$Pregunta6.")</h3>";
if($Pregunta6=="b"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 7, respuesta seleccionada: (".$Pregunta7.")</h3>";
if($Pregunta7=="c"){
    echo "<img src='correcta.png' width='3%'><hr>";
    $calificacion++;
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 8, respuesta seleccionada: (".$Pregunta8.")</h3>";
if($Pregunta8=="b"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 9, respuesta seleccionada: (".$Pregunta9.")</h3>";
if($Pregunta9=="a"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 10, respuesta seleccionada: (".$Pregunta10.")</h3>";
if($Pregunta10=="b"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($calificacion>5 && $calificacion<=8){
    echo " Pasaste con " .$calificacion;
    echo "<img src='mal.png' width='3%'>";

}elseif($calificacion<5){
    echo "Estas mas o menos. Sacaste " . $calificacion;
    echo "<img src='maso.png' width='3%'><hr>";
}elseif($calificacion>8){
    echo "EXCELENTEEE!!! Terminaste con calificacion de ". $calificacion;
    echo "<img src='excelente.png' width='3%'><hr>";
}
?>