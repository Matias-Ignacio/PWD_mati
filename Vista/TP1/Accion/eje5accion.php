<?php
$titulo = "Ejercicio 5";
include_once '../../Estructura/header.php';
echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $recibido = data_submitted();
    $objpersona = new Persona($recibido);

    $mayor = "";

    if ($objpersona->mayorEdad() == "Soy"){
        $mayor = "Soy ";
    }else{
        $mayor = "No soy ";
    }

    ?>
    <div class="divform">
        <?php 
            echo "Hola, yo soy ".$objpersona->getNombre()." ".$objpersona->getApellido()." tengo ".$objpersona->getEdad()." años y vivo en la calle ".$objpersona->getDireccion(); 
            echo ".  " .$mayor . " mayor de edad."."<br>"; 
            echo "Estudios cursados: " . $objpersona->mostrarEstudios() . "<br> Soy de sexo " . $objpersona->mostrarSexo(). "<br>";
        ?>
    <div><a href="../Ejercicio/ejercicio5.php" class="btn btn-success" role="button">Volver</a></div>
    </div>

<?php
}else{
    echo '<div class="divform"><p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio5.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>