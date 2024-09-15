<?php
class AbmPersona{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Persona
     */
    private function cargarObjeto($param){
        $objPersona = null;

        if( array_key_exists('NroDni',$param) and 
        array_key_exists('Apellido',$param) and
        array_key_exists('Nombre',$param) and
        array_key_exists('fechaNac',$param) and
        array_key_exists('Telefono',$param) and
        array_key_exists('Domicilio',$param))
        {
            $objPersona = new Persona();
            $objPersona->setear($param['NroDni'], $param['Apellido'], $param['Nombre'], $param['fechaNac'], $param['Telefono'], $param['Domicilio']);
        }
        return $objPersona;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Persona
     */
    private function cargarObjetoConClave($param){
        $objPersona = null;
        
        if( isset($param['NroDni']) )
        {
            $objPersona = new Persona();
            $objPersona->setear($param['NroDni'], null, null, null, null, null);
        }
        return $objPersona;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['NroDni']))
            $resp = true;
        return $resp;
    }
    

    /**
     * 
     * @param array $param
     * @return boolean
     */
    public function alta($param){
        $resp = false;
      //  $param['NroDni'] =null;
        $elObjPersona = $this->cargarObjeto($param);
//        verEstructura($elObjPersona);
        if ($elObjPersona != null and $elObjPersona->insertar())
        {
            $resp = true;
        }
        return $resp;
    }


    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param))
        {
            $elObjPersona = $this->cargarObjetoConClave($param);
            if ($elObjPersona != null and $elObjPersona->eliminar())
            {
                $resp = true;
            }
        }
        return $resp;
    }
    
        /**
     * Buscar si la persona tiene un auto
     * @param array $param
     * @return boolean
     */
    public function verificarAuto($param){
        $resp = false;
        $objAbmAuto = new AbmAuto();
        $enviar['DniDuenio'] = $param['NroDni'];
        $listaAuto = $objAbmAuto->buscar($enviar);
        if(!empty($listaAuto)){
            $resp = true;
        }
        return $resp;
    }

    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param))
        {
            $elObjPersona = $this->cargarObjeto($param);
            if($elObjPersona != null and $elObjPersona->modificar())
            {
                $resp = true;
            }
        }
        return $resp;
    }



    /**
     * @param string $dni
     * @return object $personaEncontrada
     */

     public function buscarPersona($dni){
        $objP = new Persona();
        $personaEncontrada = null;
        if($objP ->buscar($dni)){
            $personaEncontrada = $objP;
        }

        return $personaEncontrada;
     }
    

    /**
     * permite buscar un objeto
     * @param array $param
     * @return array
     */
    public function buscar($param){
        $where = " true ";
        if ($param <> NULL)
        {
            if (isset($param['NroDni']))
                $where .= " and NroDni = '".$param['NroDni']."'";
            if (isset($param['Apellido']))
                $where .= " and Apellido = '".$param['Apellido']."'";
            if (isset($param['Nombre']))
                $where .= " and Nombre = '".$param['Nombre']."'";  
            if (isset($param['fechaNac']))
                $where .= " and fechaNac = '".$param['fechaNac']."'";    
            if (isset($param['Telefono']))
                $where .= " and Telefono = '".$param['Telefono']."'";   
            if (isset($param['Domicilio']))
                $where .= " and Domicilio = '".$param['Domicilio']."'";   
        }
        $arreglo = Persona::listar($where);  
        return $arreglo;
    }
}
?>