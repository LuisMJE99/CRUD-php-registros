<?php
include('conexion.php');

$cod_estudiante=$_POST['cod_estudiante'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$consql = "INSERT INTO alumno VALUES()";
$querisql = mysqli_query($con,$consql);

if($querisql){
    header('Location:alumno.php');
}

?>