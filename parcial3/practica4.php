<?php

$calificacion=0;

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

if($Pregunta1=="b"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($Pregunta2=="a"){
    $calificacion++; 
    echo "<img src='correcta.png' width='3%'><hr>";       
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($Pregunta3=="a"){
    $calificacion++;   
    echo "<img src='correcta.png' width='3%'><hr>";     
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($Pregunta4=="c"){
    $calificacion++;        
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($Pregunta5=="b"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($Pregunta6=="b"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($Pregunta7=="c"){
    echo "<img src='correcta.png' width='3%'><hr>";
    $calificacion++;
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($Pregunta8=="b"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($Pregunta9=="a"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($Pregunta10=="b"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($calificacion>5 && $calificacion<=8){
    echo "Felicidades!!! Pasaste con " .$calificacion;
    echo "<img src='normal.png' width='3%'>";

}elseif($calificacion<5){
    echo "No eres fan. Sacaste " . $calificacion;
    echo "<img src='triste.png' width='3%'><hr>";
}elseif($calificacion>8){
    echo "Eres un fan de verdad!!! Terminaste con calificacion de ". $calificacion;
    echo "<img src='excelente.png' width='3%'><hr>";
}
?>