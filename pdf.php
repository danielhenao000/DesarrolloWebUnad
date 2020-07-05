<?php

require __DIR__.'/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
include("conexion.php");
if (!$conn) {
    die("<div class='alert alert-danger' role='alert'> No se pudo establecer conección a la base de datos</div>" . mysqli_connect_error());
}
$query = "select * from tabla10";
$resultado = mysqli_query($conn, $query);
if($resultado){
$numfilas = $resultado->num_rows;

$text  = '<table style="border: 1px solid #000; width: 100%">
<thead >
    <tr style="background-color: grey">
    <th style="width: 20%;text-align: left;vertical-align: top;border: 1px solid #000;border-collapse: collapse;padding: 0.3em;caption-side: bottom;" scope="col">#Código</th>
    <th style="width: 20%;text-align: left;vertical-align: top;border: 1px solid #000;border-collapse: collapse;padding: 0.3em;caption-side: bottom;"  scope="col">Nombre</th>
    <th style="width: 20%;text-align: left;vertical-align: top;border: 1px solid #000;border-collapse: collapse;padding: 0.3em;caption-side: bottom;"  scope="col">Marca</th>
    <th style="width: 20%;text-align: left;vertical-align: top;border: 1px solid #000;border-collapse: collapse;padding: 0.3em;caption-side: bottom;"  scope="col">Precio</th>
    <th style="width: 20%;text-align: left;vertical-align: top;border: 1px solid #000;border-collapse: collapse;padding: 0.3em;caption-side: bottom;"  scope="col">Cantidad</th>
    </tr>
</thead>
<tbody>
    ';



for ($x=0;$x<$numfilas;$x++) {
    $fila = $resultado->fetch_object();
    $text = $text . '<tr>
    <th scope="row">'.$fila->id.'</th>
    <td>'.$fila->nombre.'</td>
    <td>'.$fila->marca.'</td>
    <td>$ '.number_format($fila->precio, 2, ',', ' ').'</td>
    <td>'.$fila->cantidad.'</td>
    </tr>';
}
$text = $text .  "</tbody> </table>";
}
$html2pdf = new Html2Pdf();
$html2pdf->writeHTML('<h1 style="text-align: center;">Inventario Productos</h1><br>');
$html2pdf->writeHTML($text);
$html2pdf->output();

?>