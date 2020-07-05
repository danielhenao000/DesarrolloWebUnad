<?php 

    $id = $_POST["id"];

    $servername = "localhost";
    $database = "bdunad10";
    $username = "root";
    $password = "12345678";
   
switch($id)
  {   
    case 1:
        $sql = "CREATE DATABASE bdunad10";
        $conn = mysqli_connect($servername, $username, $password);
        if (!$conn) {
            die("<div class='alert alert-danger' role='alert'> No se pudo establecer conección a la base de datos</div>" . mysqli_connect_error());
        }
        if($conn->query($sql) === true)
            echo"<div class='alert alert-success' role='alert'>Base de datos Creada Con Exito</div>";
        else
            echo "<div class='alert alert-danger' role='alert'> No Se Pudo Crear La Base De Datos O Ya Existe</div>"; 
        break;
    case 2:
        $sql = "CREATE TABLE tabla10 (id int,nombre varchar(50), marca varchar(50), precio int, cantidad int, PRIMARY KEY(id));";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("<div class='alert alert-danger' role='alert'> No se pudo establecer conección a la base de datos</div>" . mysqli_connect_error());
        }
        if($conn->query($sql) === true)
        echo"<div class='alert alert-success' role='alert'>Tabla Creada Con Exito</div>";
        else
        echo "<div class='alert alert-danger' role='alert'> No Se Pudo Crear La Tabla O Ya  Existe</div>"; 
        break;
    case 3:        
        $backup_file = $database ."_". date("Y-m-d-H-i-s") . '.sql';
        $output = shell_exec('C:\AppServ\MySQL\bin\mysqldump.exe --no-defaults -u root -p12345678 bdunad10 > backup/'.$backup_file);
        echo"<div class='alert alert-success' role='alert'>Backup generado - Archivo: $backup_file</div>";
        echo "<pre>$output</pre>";
        break;
  }   
  mysqli_close($conn);
?>