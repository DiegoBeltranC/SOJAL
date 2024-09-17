<?php

include 'cBaseDatos.php';

//Clase profesionista
class cReporteCiudadano {
	
	//Atributos de la clase	
	private $id_reporte;
    private $id_usuario;
    private $descripcion;
    private $fecha_creacion;
    private $estado;
    private $tipo_basura;
    private $referencias;
    private $calle;
    private $colonia;
    private $longitud;
    private $latitud;
	
	//Constructor por default	
    function __construct() {
			$this->id_reporte="";
			$this->id_usuario="";
			$this->descripcion="";
			$this->fecha_creacion="";
			$this->estado="";            
            $this->tipo_basura="";
            $this->referencias="";
            $this->calle="";
            $this->colonia="";
            $this->longitud="";
            $this->latitud="";
	}


    //Métodos setters para todas las propiedades		
    function setId_reporte($id_reporte) {
        $this->id_reporte = $id_reporte;
    }

    function setCveProfesionista($cveProfesionista) {
        $this->cveProfesionista = $cveProfesionista;
    } 

    function setPrimerApellido($primerApellido) {
        $this->primerApellido = $primerApellido;
    }

    function setSegundoApellido($segundoApellido) {
        $this->segundoApellido = $segundoApellido;
    } 

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCurp($curp) {
        $this->curp = $curp;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setCorreoElectronico($correoElectronico) {
        $this->correoElectronico = $correoElectronico;
    }

    function setCveCarrera($cveCarrera) {
        $this->claveCarrera = $cveCarrera;
    }

    function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;
    }

    function setFechaTerminacion($fechaTerminacion) {
        $this->fechaTerminacion = $fechaTerminacion;
    }

    function setInstitucionProcedencia($institucionProcedencia) {
        $this->institucionProcedencia = $institucionProcedencia;
    }

    //Faltan los demás setters

   //Métodos getters para todas las propiedades
    function getMatricula() {
        return $this->matricula;
    }

    function getCveProfesionista() {
        return $this->cveProfesionista;
    }

    //Faltan los demás getters
    

	//Método registraProfesionista, usado para registrar un profesionista en la BD
    function registraProfesionista(){     

	    $baseDatos = new cBaseDatos();
    	$sentenciaSQL="INSERT into profesionistas values ('$this->cveProfesionista', '$this->matricula', '$this->primerApellido', '$this->segundoApellido', '$this->nombre', '$this->curp', '$this->correoElectronico', '$this->sexo', 56, 60, '$this->claveCarrera', '$this->fechaInicio', '$this->fechaTerminacion', '$this->institucionProcedencia')"; 
	
		$result = $baseDatos->insertarRegistro($sentenciaSQL);


		$response = array();

    
	    if ($result) {
       
    		$response["success"] = 1;
        	$response["message"] = "Profesionista registrado correctamente.";
    	} else {
       
        	$response["success"] = 0;
        	$response["message"] = "Oops! Ocurrió un error!!";
       
    	}
 		
		return $response;
		 
    }//Fin método registraProfesionista


	//Método actualizaDatosPersonales, usado para actualizar un Profesionista en la BD
    function actualizaDatosPersonales(){     
	    $baseDatos = new cBaseDatos();
	    $sentenciaSQL="UPDATE profesionistas set primerApellido='$this->primerApellido', segundoApellido='$this->segundoApellido', nombre='$this->nombre', curp='$this->curp', correoElectronico='$this->correoElectronico', sexo='$this->sexo', cveCarrera='$this->claveCarrera', institucionProcedencia='$this->institucionProcedencia', fechaInicio='$this->fechaInicio', fechaTerminacion='$this->fechaTerminacion'  WHERE cveProfesionista='$this->cveProfesionista'"; 
		$result = $baseDatos->modificarRegistro($sentenciaSQL);
		
        $response = array();
		if ($result>0) {       
        	$response["success"] = 1;
        	$response["message"] = "Profesionista modificado correctamente.";
	    } else {
    	    $response["success"] = 0;
        	$response["message"] = "Oops! Ocurrió un error!!";       
    	}
		return $response;		 
    }//Fin método actualizaDatosPersonales


	//Método eliminaProfesionista, usado para eliminar un profesionista en la BD
    function eliminaProfesionista(){     

	    $baseDatos = new cBaseDatos();

	    $sentenciaSQL="DELETE from profesionistas WHERE cveProfesionista='$this->cveProfesionista'"; 
		$result = $baseDatos->eliminarRegistro($sentenciaSQL);
	
    	if ($result) {
        
        	$response["success"] = 1;
        	$response["message"] = "Profesionista eliminado correctamente.";
    	} else {
       
        	$response["success"] = 0;
        	$response["message"] = "Oops! Ocurrió un error!!";      
    	}

		return $response;
		 
    }//Fin método eliminaProfesionista


	//Método consultaProfesionista, usado para consultar registros de un Profesionista en la BD
    function consultaProfesionista(){     
	    
        //Crear objeto tipo cBase de datos para acceder fisicamente a la BD
		$baseDatos = new cBaseDatos();

		//Construye la sentencia SQL de consulta de la base de datos
		$sentenciaSQL="SELECT prof.cveProfesionista, prof.matricula, prof.primerApellido, prof.segundoApellido, prof.nombre, prof.sexo, prof.curp, prof.correoElectronico, ";
        $sentenciaSQL = $sentenciaSQL . "prof.cveCarrera, prof.fechaInicio, prof.fechaTerminacion, prof.institucionProcedencia, catant.idEntidadFederativa ";
        $sentenciaSQL = $sentenciaSQL . "from profesionistas prof ";
        $sentenciaSQL = $sentenciaSQL . "INNER join cat_escuelas_antecedente catant ON prof.institucionProcedencia = catant.idEscuelaAntecedente ";
        $sentenciaSQL = $sentenciaSQL . "WHERE prof.cveProfesionista=". $this->cveProfesionista;

        //Llama al método consulta registros de la base de datos
        //Y le envia la sentencia SQL de la consulta
        //ademas retorna un array con los resultados de la consulta
        $rs = $baseDatos->consultaRegistros($sentenciaSQL);

        //Crea un array del tipo JSON para devolver como resultado
		$result = array();
        //Comparar si hubo resultados de la consulta
		if ($rs->num_rows > 0){
	    	while($row = $rs->fetch_assoc()){
				//$result[]= 	array_map('utf8_encode', $row);
                $result[]=  $row;
                
			}
		}
		else{
        
        	$result["error"] = 1;
        	$result["message"] = "El profesionista no existe en la BD.";
		
		}

		return $result;
		 
    }//Fin método consultaProfesionista


    
    //Método consultaProfesionistas, usado para consultar registros de todos los profesionistas en la BD
    function consultaProfesionistas(){     
        
        $baseDatos = new cBaseDatos();
        
        $sentenciaSQL="SELECT distinct prof.cveProfesionista, prof.matricula, CONCAT(prof.primerApellido,' ',prof.segundoApellido,' ',prof.nombre) as profesionista, prof.sexo, ";
        $sentenciaSQL = $sentenciaSQL . "prof.cveCarrera, catcar.nombreCarrera, catcar.abrCarrera ";
        $sentenciaSQL = $sentenciaSQL . "from profesionistas prof ";
        $sentenciaSQL = $sentenciaSQL . "INNER join cat_carreras catcar on catcar.cveCarreraUni = prof.cveCarrera ";        
        $sentenciaSQL = $sentenciaSQL . " Order by cveCarrera, profesionista";

        $rs = $baseDatos->consultaRegistros($sentenciaSQL);
        $result = array('data' => array());
        if ($rs->num_rows > 0){           
           while($row = $rs->fetch_assoc()){
                $result['data'][] = array_map('utf8_encode', $row); 
                //$result['data'][] = $row; 

            }
        
        }
        
        return $result;
         
    }//Fin método consultaProfesionistas


} //Fin clase Profesionista

?>