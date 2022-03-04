<?php
    include('conexion.php');

    $consusql = "SELECT * FROM alumno";
    $sqlquery = mysqli_query($con, $consusql);
    $row = mysqli_fetch_array($sqlquery);
?>