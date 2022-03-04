<?php
    include('conexion.php');

    $consusql = "SELECT * FROM alumno";
    $sqlquery = mysqli_query($con, $consusql);
    $row = mysqli_fetch_array($sqlquery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Documento de nombres agregados</title>
</head>
<body>
    <center>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">

                <h1>Formulario</h1>
                <form action="ingresar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="numero_alumno" placeholder="numero control"><br>
                    <input type="text" class="form-control mb-3" name="dni_alumno" placeholder="dni"><br>
                    <input type="text" class="form-control mb-3" name="nombre_alumno" placeholder="Nombre de alumno"><br>
                    <input type="text" class="form-control mb-3" name="apellidos_alumno" placeholder="Apellido de alumno"><br>
                    <input type="submit"  class="btn btn-primary" >
                </form>
            </div>

            <div class="col-md-8">
                <h1>Mostrar Tabla</h1>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Codigo</th>
                            <th>dni</th>
                            <td>Nombre</td>
                            <th>Apellido</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            while($row = mysqli_fetch_array($sqlquery)){?>
                            <tr>
                                <th><?php echo $row['cod_estudiante'] ?></th>
                                <th><?php echo $row['dni'] ?></th>
                                <th><?php echo $row['nombres'] ?></th>
                                <th><?php echo $row['apellidos'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-info">Actualizar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </center>
</body>
</html>