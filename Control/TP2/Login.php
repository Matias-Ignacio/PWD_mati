<?php
class Login{
    private $usuario;
    private $password;


    public function __construct($ArregloDatos)
    {
        $this->usuario = $ArregloDatos["usuario"];
        $this->password = $ArregloDatos["password"];
        
    }

    //*************** GETTERS ***************
    //Obtiene el valor de $usuario
    public function getUsuario(){
        return $this->usuario;
    }

    //Obtiene el valor de $password
    public function getPassword(){
        return $this->password; 
    }

    //*************** SETTERS ***************
    //Setea el valor de $usuario
    public function setUsuario($var){
        $this->usuario=$var;
    }

    //Setea el valor de $password
    public function setPassword($var){
        $this->password=$var; 
    }


    /**
     * Retorna un array que contiene 4 usuarios y sus 4 contraseñas.
     * @return ARRAY $usuarios
     */
    public function arregloDatos(){
        $usuarios[0] = ["usuario" => "esteban","clave" => "1111"];
        $usuarios[1] = ["usuario" => "martin", "clave" => "2222"];
        $usuarios[2] = ["usuario" => "juan", "clave" => "3333"];
        $usuarios[3] = ["usuario" => "gaston", "clave" => "4444"];
        return $usuarios;
    }


    /**
     * Compara un usuario y una clave con los guardados en el array de la funcion arregloDatos() y verifica si coincide con alguno o no
     * @return STRING $mensaje
     */
    public function validarUsuario() {
        $usuarios = $this->arregloDatos(); //Obtiene el arreglo de usuarios
        $rta = 0; //Inicializa $rta con valor por defecto
        
        //Obtiene el usuario y la clave
        $usuario = $this->getUsuario();
        $clave = $this->getPassword();
        
        //Valida si el usuario o la clave están vacíos
        if(empty($usuario) || empty($clave)){
            $rta = -1; //Usuario o clave vacíos
        }
        
        // Verifica si $usuarios es un array válido
        if(!is_array($usuarios)){
            $rta = -2; //Error en el arreglo de usuarios
        }
        
        //Recorre el arreglo de usuarios para encontrar coincidencias
        foreach($usuarios as $item){
            //Asegura que el usuario y la clave estén bien definidos
            if(isset($item["usuario"], $item["clave"]) && $item["usuario"] === $usuario){
                if($item["clave"] === $clave){
                    $rta = 1; //Usuario y clave correctos
                }else{
                    $rta = 2; //Clave incorrecta
                }
            }
        }
        
        //Si no se encontró el usuario
        return $rta;
    }
}