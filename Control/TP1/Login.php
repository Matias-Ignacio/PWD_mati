<?php
class Login{
    private $usuario;
    private $password;


    public function __construct($user,$pass)
    {
        $this->usuario=$user;
        $this->password=$pass;
        
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function getPassword(){
        return $this->password; 
    }
    public function setUsuario($user){
        $this->usuario=$user;
    }

    public function setPassword($pass){
        $this->password=$pass; 
    }
    public function arregloDatos(){
        $usuarios[0] = ["usuario" => "esteban","clave" => "1111"];
        $usuarios[1] = ["usuario" => "martin", "clave" => "2222"];
        $usuarios[2] = ["usuario" => "juan", "clave" => "3333"];
        $usuarios[3] = ["usuario" => "gaston", "clave" => "4444"];
        return $usuarios;
    }
    public function validarUsuario(){
        $usuarios = $this->arregloDatos();
        if($usuarios){
            $usuario = $this->getUsuario();
            $clave = $this->getPassword();
            $verifica = true; 
            $i = 0;
            while($i < count($usuarios) && $verifica){
                if($usuarios[$i]["usuario"] == $usuario){
                    if($usuarios[$i]["clave"] == $clave){
                        $mensaje = "Bienvenido ".$usuario."!\n";
                    }
                    else{
                        $mensaje = $usuario. " su contraseña es incorrecta \n";
                    }
                    $verifica = false;
                }
                $i ++;
            }
            if($verifica){
                $mensaje = "El usuario ".$usuario." no existe \n";
            }
        }
        return $mensaje;
    } 
}