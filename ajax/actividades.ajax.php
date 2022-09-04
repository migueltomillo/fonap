<?php 

require_once "../controladores/actividades.controlador.php";
require_once "../modelos/actividades.modelo.php";

class ajaxActividades{

	public $id;
	public $codigo;
	public $tema;
	public $fecha;
	public $evidencia;
	public $sesion;
	public $programa;
	public $modalidad;


	public function MostrarActividades(){

		$respuesta = ControladorActividades::ctrMostrarActividades();

		echo json_encode($respuesta);
	}

	public function registrarActividades(){
		
		$respuesta = ControladorActividades::ctrRegistrarActividades(
		$this->codigo,
		 $this->tema,
		 $this->fecha,
		 $this->evidencia,
		 $this->sesion,
		 $this->programa,
		 $this->modalidad,
		 );

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}

	public function eliminarActividad(){
		
		$respuesta = ControladorActividades::ctrEliminarActividad($this->id);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}

	public function actualizarActividad(){
		
		$respuesta = ControladorActividades::ctrActualizarActividad(
		$this->id,	
		$this->codigo,
		$this->tema,
		$this->fecha,
		$this->evidencia,
		$this->sesion,
		$this->programa,
		$this->modalidad
		);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}
	
}

if(!isset($_POST["accion"])){
	$respuesta = new ajaxActividades();
	$respuesta -> MostrarActividades();
}else{

	if($_POST["accion"] == "registrar"){
		$insertar = new ajaxActividades();
		$insertar->codigo = $_POST["codigo"];
		$insertar->tema = $_POST["tema"];
		$insertar->fecha = $_POST["fecha"];
		$insertar->evidencia = $_POST["evidencia"];
		$insertar->sesion = $_POST["sesion"];
		$insertar->programa = $_POST["programa"];
		$insertar->modalidad = $_POST["modalidad"];
		
		$insertar->registrarActividades();
	}

	if($_POST["accion"] == "eliminar"){
		$eliminar = new ajaxActividades();

		$eliminar->id = $_POST["id"];
		
		$eliminar->eliminarActividad();
	}

	if($_POST["accion"] == "actualizar"){
		$actualizar = new ajaxActividades();

		$actualizar->id = $_POST["id"];
		$actualizar->codigo = $_POST["codigo"];
		$actualizar->tema = $_POST["tema"];
		$actualizar->fecha = $_POST["fecha"];
		$actualizar->evidencia = $_POST["evidencia"];
		$actualizar->sesion = $_POST["sesion"];
		$actualizar->programa = $_POST["programa"];
		$actualizar->modalidad = $_POST["modalidad"];
		
		$actualizar->actualizarActividad();
	}

}




