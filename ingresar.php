<?php
    include("conexion.php");
    if (!$conn) {
        die("<div class='alert alert-danger' role='alert'> No se pudo establecer conección a la base de datos</div>" . mysqli_connect_error());
    }
    $id = trim($_POST['id']);
    $nombre = trim($_POST['nombre']);
    $marca = trim($_POST['marca']);
    $precio = trim($_POST['precio']);
    $cantidad = trim($_POST['cantidad']);
    
    if($id != "" && $nombre != ""){
        $query = "INSERT INTO tabla10 VALUES (" .$id.",'".$nombre."','".$marca."',".$precio.",".$cantidad .")";
        $resultado = mysqli_query($conn, $query);
        if($resultado)
            echo "Registro exitoso";
        else
            echo "No se pudo insertar el registro con código (".$id.") posiblemente ya exista"  ;
    }

?>