<?php

//Incluir la clase BD
include 'cBaseDatos.php';

//Clase usuario
class cUsuario{

    //Atributos de la clase

    private $id_usuario;
    private $nombre;
    private $apellido_p;
    private $apellido_m;
    private $correo;
    private $password;
    private $fecha_apertura;
    private $id_rol;
    private $curp;
    private $fecha_nacimiento;
    private $id_imagen;

    //Constructor por default
    function __construc(){

        $this->id_usuario = "";
        $this->nombre = "";
        $this->apellido_p = "";
        $this->apellido_m = "";
        $this->correo = "";
        $this->password = "";
        $this->fecha_apertura = "";
        $this->id_rol = "";
        $this->curp = "";
        $this->fecha_nacimiento = "";
        $this->id_imagen = "";

    }

    //Getters and setters de la clase
    function setIdUsuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setApelliP($apellido_p){
        $this->apellido_p = $apellido_p;
    }

    function setApelliM($apellido_m){
        $this->apellido_m = $apellido_m;
    }

    function setCorreo($correo){
        $this->correo = $correo;
    }

    function setPassword($password){
        $this->password = $password;
    }

    function setFechaApertura($fecha_apertura){
        $this->fecha_apertura = $fecha_apertura;
    }

    function setIdRol($id_rol){
        $this->id_rol = $id_rol;
    }

    function setCurp($curp){
        $this->curp = $curp;
    }

    function setFechaNacimiento($fecha_nacimiento){
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function setIdImagen($id_imagen){
        $this->id_imagen = $id_imagen;
    }

    //************* Getters */

    function getIdUsuario(){
        return $this->id_usuario;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getApelliP(){
        return $this->apellido_p;
    }

    function getApelliM(){
        return$this->apellido_m;
    }

    function getCorreo(){
        return $this->correo;
    }

    function getPassword(){
        return $this->password;
    }

    function getFechaApertura(){
        return $this->fecha_apertura;
    }

    function getIdRol(){
        return $this->id_rol;
    }

    function getCurp(){
        return $this->curp;
    }

    function getFechaNacimiento(){
        return $this->fecha_nacimiento;
    }

    function getIdImagen(){
        return $this->id_imagen;
    }


    //Funcion para iniciar sesión
    function iniciarSesion(){

        $bd = new cBaseDatos();
    
        // Validar logueo
        $comandoSQL = "SELECT * FROM usuarios WHERE correo = '$this->correo' AND password = '$this->password'";
        $comandoSQL2 = "SELECT * FROM trabajadores WHERE correo = '$this->correo' AND password = '$this->password'";
        
        // Si trajo una fila, el usuario existe, si no, no existe el usuario
        $resultado = $bd->consultaRegistros($comandoSQL);
        $resultado2 = $bd->consultaRegistros($comandoSQL2);
        
        // Si encontró el registro del usuario
        if ($resultado->num_rows > 0){
            // Inicia la sesión y crea variables de sesión
            session_start();
            $_SESSION['autenticado'] = true;
            $_SESSION['nombre'] = $this->nombre;
            $fila = $resultado->fetch_row();
            $_SESSION['id_usuario'] = $fila[0];
            $_SESSION['id_rol'] = $fila[8];
            $_SESSION['nombre'] = $fila[1];
            // Retorna un valor de 1 para indicar que se inició la sesión correctamente
            return 1;
        }
        elseif ($resultado2->num_rows > 0) { 
            session_start();
            $_SESSION['autenticado'] = true;
            $_SESSION['nombre'] = $this->nombre;
            $fila = $resultado2->fetch_row();
            $_SESSION['id_usuario'] = $fila[0];
            $_SESSION['id_rol'] = $fila[8];
            $_SESSION['nombre'] = $fila[1];
    
            // Verifica el rol y retorna el valor correspondiente
            if ($fila[8] == 3) {
                return 2;
            } else if ($fila[8] == 1) {
                return 3;
            }
        }
        // En caso que no se encontró al usuario, retorna 0
        else {
            return 0;
        }
    }
    
}
?>