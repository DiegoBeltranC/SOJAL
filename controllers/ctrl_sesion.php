<?php

	include '../class/cUsuario.php';
    //Instancia de la clase usuarios
	$cUsuario = new cUsuario();
	
	$resultado="";
	
	if(isset($_GET['inicia_sesion'])){
        $cUsuario->setCorreo($_POST['gmail']);
        $cUsuario->setPassword($_POST['password']);
        
        //Iniciar  sesion
        $resultado = $cUsuario->iniciarSesion();
        
    }
    
    ob_clean();
	echo json_encode($resultado);	

?>