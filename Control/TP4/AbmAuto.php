<?php
class AbmAuto{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los Modelos de las variables instancias del objeto

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los Modelos de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param){
        $objAuto = null; //Inicializo variable

        if( array_key_exists('Patente',$param) and 
        array_key_exists('Marca',$param) and
        array_key_exists('Modelo',$param) and
        array_key_exists('DniDuenio',$param))
        {
            $objAuto = new Auto();
            $objDuenio = new Persona();
            $objDuenio->setNroDni( $param['DniDuenio']);
            $objDuenio->buscar($param['DniDuenio']);
            $objAuto->setear($param['Patente'], $param['Marca'], $param['Modelo'], $objDuenio);
        }
        return $objAuto;
    }
    

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los Modelos de las variables instancias del objeto que son claves
     * @param array $param
     * @return Auto
     */
    private function cargarObjetoConClave($param){
        $objAuto = null;
        
        if( isset($param['Patente']) )
        {
            $objAuto = new Auto();
            $objAuto->setear($param['Patente'], null, null, null);
        }
        return $objAuto;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['Patente']))
            $resp = true;
        return $resp;
    }
    

    /**
     * 
     * @param array $param
     * @return bool
     */
    public function alta($param){
        $resp = false;
        if($this->vXc($param, 'Patente')
        && $this->vXc($param, 'Marca')
        && $this->vXc($param, 'Modelo')){
            $elObjAuto = $this->cargarObjeto($param);
 
            if ($elObjAuto != null and $elObjAuto->insertar())
            {
                $resp = true;
            }
        }
        return $resp;
        
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return bool
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param))
        {
            $elObjAuto = $this->cargarObjetoConClave($param);
            if ($elObjAuto!=null and $elObjAuto->eliminar())
            {
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    /**
     * permite modificar un objeto
     * @param array
     * @return boolean
     */
    public function modificacion($param)
    {
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param))
        {
            $elObjAuto = $this->cargarObjeto($param);
            if($elObjAuto != null and $elObjAuto->modificar())
            {
                $resp = true;
            }
        }
        return $resp;
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
            if (isset($param['Patente']))
            $where .= " and Patente = '".$param['Patente']."'";
        /*  if (isset($param['Marca']))
        $where .= " and Marca = '".$param['Marca']."'";
        if (isset($param['Modelo']))
        $where .= " and Modelo = '".$param['Modelo']."'";  */
        if (isset($param['DniDuenio']))
        $where .= " and DniDuenio = '".$param['DniDuenio']."'";    
        }
        $arreglo = Auto::listar($where);
        return $arreglo;
    }

        /**
     * permite modificar el dni ddel duenio
     * @param array
     * @return boolean
     */
    public function modificarDni($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjAuto = $this->cargarObjetoConClave($param);
            $elObjAuto->cargar(); 
            $objDuenio =  new Persona();
            $objDuenio->setNroDni( $param['NroDni']);
            $objDuenio->buscar($param['NroDni']);
            $elObjAuto->setObjDuenio($objDuenio);

            if($elObjAuto != null and $elObjAuto->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    


    

/**
 * Validar en el servidor 
 * Recibe como parametro el arreglo completo y la clave aser validada
 * @param $key
 * @param array
 * @return boolean
 */
 public function vXc($param, $key){

    $bool   = false;

    $options['Marca']   = array('options' => array("regexp"=>"/^[A-Z][A-z\sáéíóúüñÁÉÍÓÚÜÑ']{1,40}[A-z]$/") );
    $options['Patente'] = array('options' => array("regexp"=>"/^[A-Z][A-Z]{2}[\s]{1}[0-9]{2}[0-9]$|^[A-Z][A-Z]{1}[\s]{1}[0-9]{3}[\s]{1}[A-Z]{1}[A-Z]$/") );
    $options['Modelo']  = array('options' => array("regexp"=>"/^[3-9][0-9]$|^[1][9]{1}[3-9]{1}[0-9]$|^[2][0]{1}[0-9]{1}[0-9]$/") );

    if ($param <> NULL)
    {
        if (($param[$key] != 'null') && (filter_var($param[$key], FILTER_VALIDATE_REGEXP, $options[$key]) !== FALSE)) {
            //exepciones
            if(($key === 'fechaNac')){
                $dia = substr($param[$key],0,2);
                $mes = substr($param[$key],3,2);
                $ani = substr($param[$key],6,4);
                $bool = checkdate($mes,$dia,$ani) ? true : false;
            }elseif($key === 'Modelo'){
                $bool = ($param[$key] <= date("Y")) ? true : false;
            }else{
                $bool = true;
            }
        }else{
            $bool = false;
        }
    }
    return $bool;
}
//****************************************************************************************** */



}
?>