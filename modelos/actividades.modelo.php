<?php 

require_once "conexion.php";

class ModeloActividades{

	static public function mdlMostrarActividades(){

		$stmt = Conexion::conectar()-> prepare("SELECT id,codigo,tema,fecha,evidencia,sesion,programa,modalidad,'X' as acciones FROM actividades");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt = null;
	}

	static public function mdlRegistrarActividades($codigo,$tema, $fecha, $evidencia, $sesion, $programa,  $modalidad ){

		$stmt = Conexion::conectar()->prepare("INSERT INTO actividades(codigo,tema,fecha,evidencia,sesion,programa,modalidad) VALUES (:codigo,:tema,:evidencia,:modalidad,:sesion,:programa,:modalidad)");

		$stmt -> bindParam(":codigo", $codigo, PDO::PARAM_STR);
		$stmt -> bindParam(":tema", $tema, PDO::PARAM_STR);
		$stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);
		$stmt -> bindParam(":evidencia", $evidencia, PDO::PARAM_STR);
		$stmt -> bindParam(":programa", $programa, PDO::PARAM_STR);
		$stmt -> bindParam(":sesion", $sesion, PDO::PARAM_STR);
		$stmt -> bindParam(":modalidad", $modalidad, PDO::PARAM_STR);
		if($stmt -> execute()){
            return "La actividad se registró correctamente";
        }else{
            return "Error, no se pudo registrar la actividad";
        }        

        $stmt = null;

	}

	static public function mdlEliminarActividad($id){

		$stmt = Conexion::conectar()->prepare("DELETE FROM actividades WHERE id = :id");

		$stmt -> bindParam(":id", $id, PDO::PARAM_INT);

		if($stmt -> execute()){
            return "El participante se eliminó correctamente";
        }else{
            return "Error, no se pudo eliminar el participante";
        }        

        $stmt = null;

	}

	static public function mdlActualizarActividad($id,$codigo,$tema, $fecha, $evidencia, $sesion, $programa,  $modalidad ){

		$stmt = Conexion::conectar()->prepare("UPDATE actividades
											   SET codigo = :codigo,
											   tema = :tema,
											   fecha = :fecha,
											   evidencia = :evidencia,
											   sesion = :sesion,
											   programa = :programa,
											   modalidad = :modalidad
											   WHERE id = :id");

		$stmt -> bindParam(":id", $id, PDO::PARAM_INT);
		$stmt -> bindParam(":codigo", $codigo, PDO::PARAM_STR);
		$stmt -> bindParam(":tema", $tema, PDO::PARAM_STR);
		$stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);
		$stmt -> bindParam(":evidencia", $evidencia, PDO::PARAM_STR);
		$stmt -> bindParam(":programa", $programa, PDO::PARAM_STR);
		$stmt -> bindParam(":sesion", $sesion, PDO::PARAM_STR);
		$stmt -> bindParam(":modalidad", $modalidad, PDO::PARAM_STR);

		if($stmt -> execute()){
            return "La actividad se actualizó correctamente";
        }else{
            return "Error, no se pudo actualizar la actividad";
        }        

        $stmt = null;
	}
	

}