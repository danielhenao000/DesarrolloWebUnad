<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styleindex.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg    bg-primary navbar-dark">
        <span class="navbar-brand" href="#">Sistema De Gestión</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Administrador </a>
            <a class="nav-item nav-link" href="inventario.php">Inventario</a>
            <a class="nav-item nav-link" href="utilidades.html">Utilidades</a>
            <a class="nav-item nav-link" href="FaseAnterior.html">Fases anteriores</a>
          </div>
        </div>
      </nav>
      
    <div id="codphp"></div>
    <div class="titulo"><h1>Administración</h1></div>
    <div class="tarjetas">
      <div class="card" style="width: 18rem;">
        <img src="images/basedatos.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Crear Base de Datos</h5>
          <p class="card-text">Esta opción permite crear la base de datos <b>"bdunad10"</b></p></br></br>
          <button class="btn btn-primary dis" onclick="crear(1)"> Crear</button>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="images/tabla.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Crear Tabla</h5>
          <p class="card-text">Esta opción permite crear una tabla en la base de datos llamada <b>"tabla10"</b></p></br>
          <button href="#" class="btn btn-primary" onclick="crear(2)">Crear</button>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="images/pdf.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Generar reporte PDF</h5>
          <p class="card-text">Permite generar un informe en PDF de los productos registrados en la base de datos con cantidades en existencia.</p>
          <a href="pdf.php"><button href="#" class="btn btn-primary">Generar</button></a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="images/backup.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Generar Backup</h5>
          <p class="card-text">Permite generar el backup de la base de datos mediante el aplicativo Mysqldump</p></br>
          <button href="" class="btn btn-primary" onclick="crear(3)">Generar</button>
        </div>
      </div>
    </div>
        
    
<script type="text/javascript">
    document.getElementById("codphp").innerHTML = ""
    function crear(id){
      var url = 'crear.php';
      $.ajax({
        type:'POST',
        url: url,
        data: 'id='+id,
        success:function(response){
          document.getElementById("codphp").innerHTML = response;
        }
      });
    }
 </script> 
</body>
</html>
