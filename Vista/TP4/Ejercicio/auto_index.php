<?php
    $titulo = "BD Autos"; //Titulo en la pestania
    include_once '../../Estructura/header.php';

    $objAbmAuto = new AbmAuto();

    $listaAuto = $objAbmAuto->buscar(null);
?>	

<div class="container mt-3 mt-5 p-4 border rounded shadow">

  <!-- Titulo en la pagina -->
  <h2 class="text-center">Listado de autos</h2>

  <p class="text-center">Listado de los autos incluidos en la base de datos</p>

  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>Patente</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>DNI Propietario</th>
        <th>Editar</th>
        <th>Eliminar</th>
        <th>Cambio de due&ntilde;o</th>
      </tr>
    </thead>

    <tbody>
      <?php	
        if(count($listaAuto) > 0)
        {
            foreach ($listaAuto as $objAuto)
            { 
                echo '<tr><td>'.$objAuto->getPatente().'</td>';
                echo '<td>'.$objAuto->getMarca().'</td>';
                echo '<td>'.$objAuto->getModelo().'</td>';
                echo '<td>'.$objAuto->getObjDuenio()->getNroDni().'</td>';
                echo '<td><a href="auto_editar.php?Patente='.$objAuto->getPatente().'" class="btn btn-color btn-sm" role="button">Editar</a></td>';
                echo '<td><a href="../Accion/auto_accion.php?accion=borrar&Patente='.$objAuto->getPatente().'" class="btn btn-outline-danger btn-sm" role="button">Borrar</a></td>'; 
                echo '<td><a href="auto_cambio_duenio.php?Patente='.$objAuto->getPatente().'" class="btn btn-outline-success btn-sm" role="button">Cambio</a></td>'; 
              }
        }
      ?>
    </tbody>
  </table>
</div>

<!-- Boton Agregar nuevo auto -->
<div class="container mt-3"><a href="auto_nuevo.php" class="btn btn-primary" role="button">Agregar nuevo auto</a></div>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>
