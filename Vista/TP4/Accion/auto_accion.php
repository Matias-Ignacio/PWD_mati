<?php
    $titulo = "Autos - Edición o borrado"; //Titulo en la pestania
    include_once '../../Estructura/header.php';
    echo '<div class="divtitulo"> <h1>';
    echo $titulo.'</h1></div>';
    $mensaje = "";
    $datos = data_submitted();
    // Si no llegan datos del data_submited    
    if(!empty($datos))
    {
        $resp = false;
        $objTrans = new AbmAuto();

        if (isset($datos['accion']))
        {
            if($datos['accion'] == 'editar')
            {
                if($objTrans->modificacion($datos))
                {
                    $resp = true;
                }
            }

            if($datos['accion'] == 'borrar')
            {
                if($objTrans->baja($datos))
                {
                    $resp = true;
                }
            }

            if($resp)
            {
                $mensaje = "La accion ".$datos['accion']." se realizo correctamente.";
            }else{
                $mensaje = "La accion ".$datos['accion']." no pudo concretarse.";
            }
        }


?>

<!-- Mensaje mostrado en pantalla -->
<div class="alert alert-info text-center p-3 divform">
<!-- Titulo en la pagina -->
<h3 class="text-center">Auto - Edici&oacute;n o borrado</h3>
    <?php	
    echo $mensaje;
    // Si no llegan datos del data_submited    
    }else{
        echo "<p>Acceso restringido>/p>";
    }
    ?>
<!-- Boton volver -->
<br><a href="../Ejercicio/auto_index.php" class="btn btn btn-info m-3" role="button">Volver</a><br>
</div>


<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>
