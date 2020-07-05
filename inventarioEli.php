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
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg    bg-primary navbar-dark">
        <span class="navbar-brand" href="#">Sistema De Gestión</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.php">Administrador </a>
            <a class="nav-item nav-link active" href="inventario.php">Inventario</a>
            <a class="nav-item nav-link" href="utilidades.html">Utilidades</a>
            <a class="nav-item nav-link" href="FaseAnterior.html">Fases anteriores</a>
          </div>
        </div>
      </nav>
      <div class="contenedorizq">
        <div class="list-group menu2">
          <a href="inventario.php" class="list-group-item list-group-item-action">
            Ingresar Producto
          </a>
          <a href="inventarioAct.php" class="list-group-item list-group-item-action">Actualizar Producto</a>
          <a href="inventarioEli.php" class="list-group-item list-group-item-action active">Eliminar Producto</a>
          <a href="inventarioCon.php" class="list-group-item list-group-item-action">Consultar Producto</a>
        </div>
      </div>
      
      <div class="contenedor3">
        <div class="contenedor3interno">
          <form method="post" onsubmit="return validar(this);" action="">
            
            <H2>Eliminar Producto</H2></br>
            <div class="form-row">
            <div class="form-group col-md-9">
              <label for="inputAddress">Código de producto</label>
              <input type="text" class="form-control" name="id" placeholder="">
            </div>
             
            </div>
            <div class="form-group col-md-6">
            <button type="submit" class="btn btn-primary">Eliminar Producto</button>
          </div>
          </div>
          </form>
          <?php
          include("eliminar.php");
          ?>
        </div>
      </div>
      <script>
        function validar(formulario){
          if (isNaN(formulario.id.value)) {
            alert('el código debe ser un número');
            return false;
          }  
          return true
        }
        </script>
        
    
</body>
</html>
