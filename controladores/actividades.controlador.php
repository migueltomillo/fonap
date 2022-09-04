<?php 

class ControladorActividades{

	static public function ctrMostrarActividades(){
		
		$respuesta = ModeloActividades::mdlMostrarActividades();
        
		return $respuesta;
	}

	static public function ctrRegistrarActividades($codigo,$tema, $fecha, $evidencia, $sesion, $programa,  $modalidad ){

		$respuesta = ModeloActividades::mdlRegistrarActividades($codigo,$tema, $fecha, $evidencia, $sesion, $programa,  $modalidad );

		return $respuesta;
	}

	static public function ctrEliminarActividad($id){

		$respuesta = ModeloActividades::mdlEliminarActividad($id);

		return $respuesta;
	}

	static public function ctrActualizarActividad($id,$codigo,$tema, $fecha, $evidencia, $sesion, $programa,  $modalidad ){

		$respuesta = ModeloActividades::mdlActualizarActividad($id,$codigo,$tema, $fecha, $evidencia, $sesion, $programa,  $modalidad );

		return $respuesta;
	}

}