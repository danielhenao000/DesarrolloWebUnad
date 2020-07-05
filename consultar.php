<?php
    include("conexion.php");
    if (!$conn) {
        die("<div class='alert alert-danger' role='alert'> No se pudo establecer conección a la base de datos</div>" . mysqli_connect_error());
    }
    $id = trim($_POST['id']);
    
    if($id != "")
        $query = "select * from tabla10 where id = ".$id;
    else
        $query = "select * from tabla10";
        $resultado = mysqli_query($conn, $query);
        if($resultado){
        $numfilas = $resultado->num_rows;
        echo '<table class="table table-sm table-dark">
        <thead>
          <tr>
            <th scope="col">#Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Marca</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
          </tr>
        </thead>
        <tbody>
         ';



        for ($x=0;$x<$numfilas;$x++) {
            $fila = $resultado->fetch_object();
            echo '<tr>
            <th scope="row">'.$fila->id.'</th>
            <td>'.$fila->nombre.'</td>
            <td>'.$fila->marca.'</td>
            <td>$ '.number_format($fila->precio, 2, ',', ' ').'</td>
            <td>'.$fila->cantidad.'</td>
          </tr>';
        }
        echo "</tbody>
        </table>";
    }else   
       echo "Hay campos vacios";

?>