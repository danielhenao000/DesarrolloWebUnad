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
        $query = "UPDATE tabla10 SET nombre='".$nombre."', marca='".$marca."', precio=".$precio.", cantidad=".$cantidad ." where id = " .$id;
        $resultado = mysqli_query($conn, $query);
        if($resultado)
            echo "Actualización exitosa";
        else
            echo "No se pudo actualizar el registro con código (".$id.")"  ;
    }

?>