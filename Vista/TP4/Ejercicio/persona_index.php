<?php
    $titulo = "BD Personas"; //Titulo en la pestania
    include_once '../../Estructura/header.php';    
    $objAbmPersona = new AbmPersona();
    $listaPersona = $objAbmPersona->buscar(null);


    // Si no llegan datos del data_submited    
    $datos = data_submitted();
    if(!empty($datos))
    {
      if($datos['NroDni'] == 'null'){$datos['NroDni'] = "";}
      $listaPersona= $objAbmPersona->buscarPorDni($datos['NroDni']);  //../Accion/persona_accion_buscar.php
    }

?>	
<script type="text/javascript" src="../../Js/validacionTP4.js"></script>
<div class="container mt-5 p-4 border rounded shadow">
  <h2 class="text-center">Listado de personas</h2>
  <p class="text-center">Listado de personas incluidas en la base de datos</p>      
  <div>
    <form action="persona_index.php" method="post" class="container mt-5 p-4 border rounded shadow">
        <label for="buscar" class="form-label text-primary fw-bold">Buscar por DNI:</label>
        <input name="NroDni" id="NroDni" type="text" pattern="[0-9]{0,8}" >
        <input type="submit" name="buscar" id="buscar" class="btn btn-info btn-sm" role="button" value="Buscar">
	</form>
  </div>  
  <br>    
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>D.N.I.</th>
        <th>Apellido</th>
        <th>Nombre</th>
        <th>Fecha Nacimiento</th>
        <th>Teléfono</th>
        <th>Domicilio</th>
        <th colspan="2">Menu</th>
      </tr>
    </thead>
    <tbody>
    <?php	
        if( count($listaPersona) > 0){
            foreach ($listaPersona as $objPersona) { 
                
                echo '<tr><td>'.$objPersona->getNroDni().'</td>';
                echo '<td>'.$objPersona->getApellido().'</td>';
                echo '<td>'.$objPersona->getNombre().'</td>';
                echo '<td>'.$objPersona->getFechaNac().'</td>';
                echo '<td>'.$objPersona->getTelefono().'</td>';
                echo '<td>'.$objPersona->getDomicilio().'</td>';
                echo '<td><a href="persona_editar.php?NroDni='.$objPersona->getNroDni().'" class="btn btn-color btn-sm" role="button">Editar</a></td>';
                echo '<td><a href="../Accion/persona_accion.php?accion=borrar&NroDni='.$objPersona->getNroDni().'" class="btn btn-outline-danger btn-sm" role="button">Borrar</a></td></tr>'; 
            }
        }
    ?>
    </tbody>
</table>
</div>

<!-- Boton agregar nueva persona -->
<div class="container mt-3">
    <a href="persona_nuevo.php" class="btn btn-primary" role="button">Agregar nueva persona</a>
</div>
<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>

