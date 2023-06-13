<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "dhl";

    $coneccion = mysqli_connect( $servidor, $usuario, $clave, $bd );
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulario </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

    <body>
        <style>
            h1 {
              text-align: center;
            }
        </style>
        <h1>Login</h1>
          
        <form method = "post">
            <div class = "container-inputs">
                
                <label for="texto"> ID_cliente: </label>
                <input type = "text" name = "id_cliente">
                <br/>
                <br/>

                <label for="texto"> Nombre del Cliente: </label>
                <input type = "text" name = "nombre_cliente">
                <br/>
                <br/>

                <label for="texto"> Apellido Paterno: </label>
                <input type = "text" name = "ap_paterno">
                <br/>
                <br/>

                <label for="texto"> Apellido Materno:  </label>
                <input type = "text" name = "ap_materno">
                <br/>
                <br/>

                <label for="texto"> Numero de celular:  </label>
                <input type = "text" name = "no_celular">
                <br/>
                <br/>

                <label for="texto"> ID_direccion:  </label>
                <input type = "text" name = "id_direccion">
                <br/>
                <br/>
            
                <input type="submit" name="Guardar" value="Guardar">
                <p></p>

                <input type="submit" name="Eliminar" value="Eliminar">
                <p></p>
                

            </div>
        </form>

    
        <!-- -->

        <?php

        if(isset($_POST['Guardar'])){

            $id_cliente = $_POST['id_cliente'];
            $nombre = $_POST['nombre_cliente'];
            $ap_paterno = $_POST['ap_paterno'];
            $ap_materno = $_POST['ap_materno'];
            $no_celular = $_POST['no_celular'];
            $id_direccion = $_POST['id_direccion'];

            $insertDates = "INSERT INTO clientes VALUES('$id_cliente', '$nombre', '$ap_paterno', '$ap_materno', '$no_celular', '$id_direccion')";
            
            $runInsert  = mysqli_query($coneccion, $insertDates); 

        }
        ?>

        <?php
        if(isset($_POST['Eliminar'])){
            
            $id_cliente = $_POST['id_cliente'];
            
            $sql = "DELETE FROM clientes WHERE id_cliente='$id_cliente'";
            $stmt = mysqli_query($coneccion, $sql);
        
        }
        ?>
    

    </body>
</html>