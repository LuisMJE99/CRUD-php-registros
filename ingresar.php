<?php
include('conexion.php');

$cod_estudiante=$_POST['numero_alumno'];
$dni=$_POST['dni_alumno'];
$nombres=$_POST['nombre_alumno'];
$apellidos=$_POST['apellidos_alumno'];

$consql = "INSERT INTO alumno VALUES()";
$querisql = mysqli_query($con,$consql);

if($querisql){
    header('Location:alumno.php');
}

?> 