<?php

	//Este controlador recibe una varriable llamada opcion que indica que operación
	//se quiere realizar sobre un profesionista
	include '../clases/cReporteCiudadano.php';
	
	//Crear un objeto del tipo cProfesionista
	$profesionista=new cProfesionista();
	

	$result = "";	

	//Opción 1 registrar un profesionista
	if($_GET['opcion']==1){
		$profesionista->setCveProfesionista($_POST['txtCveAlumno']);	
		$profesionista->setMatricula($_POST['txtMatricula']);
		$profesionista->setPrimerApellido($_POST['txtPrimerApellidoProfesionista']); 
		$profesionista->setSegundoApellido($_POST['txtSegundoApellidoProfesionista']);
		$profesionista->setNombre($_POST['txtNombreProfesionista']);
		$profesionista->setCurp($_POST['txtCurp']);
		$profesionista->setSexo($_POST['selSexo']);
		$profesionista->setCorreoElectronico($_POST['txtEmailProfesionista']);
		$profesionista->setCveCarrera($_POST['selCarrera']);
		$profesionista->setFechaInicio($_POST['dateFechaInicioCar']);
		$profesionista->setFechaTerminacion($_POST['dateFechaFinCar']);
		$profesionista->setInstitucionProcedencia($_POST['selEscuelaAntecedente']);
		$result = $profesionista->registraProfesionista();      
	}

	//Opción 2 eliminar un profesionista
	if($_GET['opcion']==2){
		$profesionista->setCveProfesionista($_GET['cveProfesionista']);
		$result = $profesionista->eliminaProfesionista();      
	}


	//Opción 3 editar un profesionista
	if($_GET['opcion']==3){
		$profesionista->setCveProfesionista($_GET['cveProfesionista']);
		$profesionista->setMatricula($_POST['txtMatriculaE']);
		$profesionista->setPrimerApellido($_POST['txtPrimerApellidoProfesionistaE']); 
		$profesionista->setSegundoApellido($_POST['txtSegundoApellidoProfesionistaE']);
		$profesionista->setNombre($_POST['txtNombreProfesionistaE']);
		$profesionista->setCurp($_POST['txtCurpE']);
		$profesionista->setSexo($_POST['selSexoE']);
		$profesionista->setCorreoElectronico($_POST['txtEmailProfesionistaE']);
		$profesionista->setCveCarrera($_POST['selCarreraE']);
		$profesionista->setFechaInicio($_POST['dateFechaInicioCarE']);
		$profesionista->setFechaTerminacion($_POST['dateFechaFinCarE']);
		$profesionista->setInstitucionProcedencia($_POST['selEscuelaAntecedenteE']);

		$result = $profesionista->actualizaDatosPersonales();      
	}

	//Opción 4 consultar un profesionista
	if($_GET['opcion']==4){
		$profesionista->setCveProfesionista($_POST['cveProfesionista']);
		$result = $profesionista->consultaProfesionista();  
    
	}
	//Opción 5 consultar profesionistas
	if($_GET['opcion']==5){
		//Llamar al método consulta profesionista del objeto cProfesionista
		//Este metodo retorna los datos consultados en un array
		$result = $profesionista->consultaProfesionistas();  
    
	}

	//Muestra el resultado de cualquier operación de formato json usando el metodo
	//json_enconde de php
	echo json_encode($result);	
?>