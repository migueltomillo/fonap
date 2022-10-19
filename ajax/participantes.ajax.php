<?php 

require_once "../controladores/participantes.controlador.php";
require_once "../modelos/participantes.modelo.php";

class ajaxParticipantes{

	public $id;
	public $nombre;
	public $apellido;
	public $genero;
	public $fechaNacimiento;
	public $edad;
	public $village;
	public $localidad;
	public $pais;
	public $programa;
	public $estado;
	public $fecha; 

	public function MostrarParticipantes(){

		$respuesta = ControladorParticipantes::ctrMostrarParticipantes();

		echo json_encode($respuesta);
	}

	public function registrarParticipantes(){
		
		$respuesta = ControladorParticipantes::ctrRegistrarParticipantes(
		$this->nombre,
		$this->apellido,
		 $this->genero,
		 $this->fechaNacimiento,
		 $this->edad,
		 $this->village,
		 $this->localidad,
		 $this->pais,
		 $this->programa,
		 $this->estado,
		 $this->fecha);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}

	public function eliminarParticipante(){
		
		$respuesta = ControladorParticipantes::ctrEliminarParticipante($this->id);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}

	public function actualizarParticipante(){
		
		$respuesta = ControladorParticipantes::ctrActualizarParticipante(
		$this->id,	
		$this->nombre,
		$this->apellido,
		$this->genero,
		$this->fechaNacimiento,
		$this->edad,
		$this->village,
		$this->localidad,
		$this->pais,
		$this->programa,
		$this->estado,
		$this->fecha);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}
	
}

if(!isset($_POST["accion"])){
	$respuesta = new ajaxParticipantes();
	$respuesta -> MostrarParticipantes();
}else{

	if($_POST["accion"] == "registrar"){
		$insertar = new ajaxParticipantes();
		$insertar->nombre = $_POST["nombre"];
		$insertar->apellido = $_POST["apellido"];
		$insertar->genero = $_POST["genero"];
		$insertar->fechaNacimiento = $_POST["fechaNacimiento"];
		$insertar->edad = $_POST["edad"];
		$insertar->village = $_POST["village"];
		$insertar->localidad = $_POST["localidad"];
		$insertar->pais = $_POST["pais"];
		$insertar->programa = $_POST["programa"];
		$insertar->estado = $_POST["estado"];
		$insertar->fecha = $_POST["fecha"];
		$insertar->registrarParticipantes();
	}

	if($_POST["accion"] == "eliminar"){
		$eliminar = new ajaxParticipantes();

		$eliminar->id = $_POST["id"];
		
		$eliminar->eliminarParticipante();
	}

	if($_POST["accion"] == "actualizar"){
		$actualizar = new ajaxParticipantes();

		$actualizar->id = $_POST["id"];
		$actualizar->nombre = $_POST["nombre"];
		$actualizar->apellido = $_POST["apellido"];
		$actualizar->genero = $_POST["genero"];
		$actualizar->fechaNacimiento = $_POST["fechaNacimiento"];
		$actualizar->edad = $_POST["edad"];
		$actualizar->village = $_POST["village"];
		$actualizar->localidad = $_POST["localidad"];
		$actualizar->pais = $_POST["pais"];
		$actualizar->programa = $_POST["programa"];
		$actualizar->estado = $_POST["estado"];
		$actualizar->fecha = $_POST["fecha"];
		
		$actualizar->actualizarParticipante();
	}

}




