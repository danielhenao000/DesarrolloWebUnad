<?php
    include("conexion.php");
    if (!$conn) {
        die("<div class='alert alert-danger' role='alert'> No se pudo establecer conección a la base de datos</div>" . mysqli_connect_error());
    }
    $id = trim($_POST['id']);
    
    if($id != ""){
        $query = "Delete From tabla10 where id = " .$id;
        $resultado = mysqli_query($conn, $query);
        if($resultado)
            echo "Eliminado exitosamente";
        else
            echo "No se pudo eliminar el registro con código (".$id.")"  ;
    }

?>