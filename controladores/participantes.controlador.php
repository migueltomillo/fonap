<?php 

class ControladorParticipantes{

	static public function ctrMostrarParticipantes(){
		
		$respuesta = ModeloParticipantes::mdlMostrarParticipantes();
        
		return $respuesta;
	}

	static public function ctrRegistrarParticipantes($nombre,$apellido,$genero, $fechaNacimiento, $edad, $village, $localidad,  $pais ,$programa ,$estado, $fecha){

		$respuesta = ModeloParticipantes::mdlRegistrarParticipantes($nombre,$apellido,$genero, $fechaNacimiento, $edad, $village, $localidad,  $pais ,$programa ,$estado, $fecha);

		return $respuesta;
	}

	static public function ctrEliminarParticipante($id){

		$respuesta = ModeloParticipantes::mdlEliminarParticipante($id);

		return $respuesta;
	}

	static public function ctrActualizarParticipante($id,$nombre,$apellido,$genero, $fechaNacimiento, $edad, $village, $localidad,  $pais ,$programa ,$estado, $fecha){

		$respuesta = ModeloParticipantes::mdlActualizarParticipante($id,$nombre,$apellido,$genero, $fechaNacimiento, $edad, $village, $localidad,  $pais ,$programa ,$estado, $fecha);

		return $respuesta;
	}

}