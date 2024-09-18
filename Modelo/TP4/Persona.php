<?php 
class Persona {
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $mensajeoperacion;


    public function __construct(){
        $this->nroDni="";
        $this->apellido = "";
        $this->nombre = "";
        $this->fechaNac = "";
        $this->telefono = "";
        $this->domicilio="";
        $this->mensajeoperacion ="";
    }


    public function setear($dni, $apellido, $nombre, $fechaNac, $telefono, $domicilio)    {
        $this->setNroDni($dni);
        $this->setApellido($apellido);
        $this->setNombre($nombre);
        $this->setFechaNac($fechaNac);
        $this->setTelefono($telefono);
        $this->setdomiciliot($domicilio);
    }


    public function getNroDni(){
        return $this->nroDni;
    }

    public function setNroDni($valor){
        $this->nroDni = $valor;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($valor){
        $this->apellido = $valor;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($valor){
        $this->nombre = $valor;
    }

    public function getFechaNac(){
        return $this->fechaNac;
    }

    public function setFechaNac($valor){
        $this->fechaNac = $valor;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($valor){
        $this->telefono = $valor;
    }

    public function getDomicilio(){
        return $this->domicilio;
    }

    public function setDomiciliot($valor){
        $this->domicilio = $valor;
    }

    public function getmensajeoperacion(){
        return $this->mensajeoperacion;
    }

    public function setmensajeoperacion($valor){
        $this->mensajeoperacion = $valor;
    }

 
    public function buscar($dni){
        $base = new BaseDatos();
        $exito = false;
        $sql = "Select * from persona where NroDni=" . $dni;
        if($base ->Iniciar()){
            if($base->Ejecutar($sql)){
                if($row = $base->Registro()){
                    $this -> setNroDni($dni);
                    $this -> setApellido($row['Apellido']);
                    $this -> setNombre($row['Nombre']);
                    $this -> setFechaNac($row['fechaNac']);
                    $this -> setTelefono($row['Telefono']);
                    $this -> setDomiciliot($row['Domicilio']);
                    $exito = true;
                }
            }
        }
        return $exito;
    }
    
    public function insertar(){
        $resp = false;
        $base  =  new BaseDatos();
        $sql  =  "INSERT INTO persona(NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio)  VALUES('"
        .$this->getNroDni()."', '"
        .$this->getApellido()."', '"
        .$this->getNombre()."', '"
        .$this->getFechaNac()."', '"
        .$this->getTelefono()."', '"
        .$this->getdomicilio()."');";
        if ($base->Iniciar()) {
            if($base->Ejecutar($sql)){
                $resp = true;
            }else{
                $this->setmensajeoperacion("Persona->insertar: ".$base->getError());
            }
        }else{
            $this->setmensajeoperacion("Personaa->insertar: ".$base->getError());
        }
        return $resp;
    }
    
    public function modificar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE persona SET 
        Apellido = '".$this->getApellido()."', 
        Nombre = '".$this->getNombre()."', 
        fechaNac = '".$this->getFechaNac()."', 
        Telefono = '".$this->getTelefono()."', 
        Domicilio = '".$this->getdomicilio()."' WHERE NroDni = '".$this->getnroDni()."'";
        if ($base->Iniciar()) {
            if($base->Ejecutar($sql)){
                $resp = true;
            }else{
                $this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
            }
        }else{
            $this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
        }
        return $resp;
    }
    
    public function eliminar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM persona WHERE NroDni = '".$this->getNroDni()."'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            }else{
                $this->setmensajeoperacion("Tabla->eliminar: ".$base->getError());
            }
        }else{
            $this->setmensajeoperacion("Tabla->eliminar: ".$base->getError());
        }
        return $resp;
    }
    
    
    /**
     * 
     * @param string $parametro
     * @return array
     */
    public static function listar($parametro=""){
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona ";
        if ($parametro != "") {
            $sql .= " WHERE " .$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res > -1){
            if($res > 0){
                
                while ($row = $base->Registro()){
                    $obj = new Persona();
                    $obj->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                    array_push($arreglo, $obj);
                }
            }
        }else{
            self::setmensajeoperacion("Persona->listar: ".$base->getError());
        }
        return $arreglo;
    }

}
?>