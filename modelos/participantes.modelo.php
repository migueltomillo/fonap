<?php 

require_once "conexion.php";

class ModeloParticipantes{

	static public function mdlMostrarParticipantes(){

		$stmt = Conexion::conectar()-> prepare("SELECT id,nombre,apellido,genero, fechaNacimiento, edad, village, localidad,  pais ,programa ,estado,'X' as acciones FROM participantes  WHERE part_estado=1");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt = null;
	}

	static public function mdlRegistrarParticipantes($nombre,$apellido,$genero, $fechaNacimiento, $edad, $village, $localidad,  $pais ,$programa ,$estado, $fecha){

		$stmt = Conexion::conectar()->prepare("INSERT INTO participantes(nombre,apellido,genero,fechaNacimiento,edad,village,localidad,pais,programa,estado,fecha) VALUES (:nombre,:apellido,:genero,:fechaNacimiento,:edad,:village,:localidad,:pais,:programa,:estado,:fecha)");

		$stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$stmt -> bindParam(":apellido", $apellido, PDO::PARAM_STR);
		$stmt -> bindParam(":genero", $genero, PDO::PARAM_STR);
		$stmt -> bindParam(":fechaNacimiento", $fechaNacimiento, PDO::PARAM_STR);
		$stmt -> bindParam(":edad", $edad, PDO::PARAM_STR);
		$stmt -> bindParam(":village", $village, PDO::PARAM_STR);
		$stmt -> bindParam(":localidad", $localidad, PDO::PARAM_STR);
		$stmt -> bindParam(":pais", $pais, PDO::PARAM_STR);
		$stmt -> bindParam(":programa", $programa, PDO::PARAM_STR);
		$stmt -> bindParam(":estado", $estado, PDO::PARAM_STR);
		$stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);
		if($stmt -> execute()){
            return "El participante se registró correctamente";
        }else{
            return "Error, no se pudo registrar el participante";
        }        

        $stmt = null;

	}

	static public function mdlEliminarParticipante($id){

		$stmt = Conexion::conectar()->prepare("UPDATE participantes SET part_estado = 0 WHERE id = :id");

		$stmt -> bindParam(":id", $id, PDO::PARAM_INT);

		if($stmt -> execute()){
            return "El participante se eliminó correctamente";
        }else{
            return "Error, no se pudo eliminar el participante";
        }        

        $stmt = null;

	}

	static public function mdlActualizarParticipante($id,$nombre,$apellido,$genero, $fechaNacimiento, $edad, $village, $localidad,  $pais ,$programa ,$estado, $fecha){

		$stmt = Conexion::conectar()->prepare("UPDATE participantes
											   SET nombre = :nombre,
											   apellido = :apellido,
											   genero = :genero,
											   fechaNacimiento = :fechaNacimiento,
											   edad = :edad,
											   village = :village,
											   localidad = :localidad,
											   pais = :pais,
											   programa = :programa,
											   estado = :estado,
											   fecha = :fecha
											   WHERE id = :id");

		$stmt -> bindParam(":id", $id, PDO::PARAM_INT);
		$stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$stmt -> bindParam(":apellido", $apellido, PDO::PARAM_STR);
		$stmt -> bindParam(":genero", $genero, PDO::PARAM_STR);
		$stmt -> bindParam(":fechaNacimiento", $fechaNacimiento, PDO::PARAM_STR);
		$stmt -> bindParam(":edad", $edad, PDO::PARAM_STR);
		$stmt -> bindParam(":village", $village, PDO::PARAM_STR);
		$stmt -> bindParam(":localidad", $localidad, PDO::PARAM_STR);
		$stmt -> bindParam(":pais", $pais, PDO::PARAM_STR);
		$stmt -> bindParam(":programa", $programa, PDO::PARAM_STR);
		$stmt -> bindParam(":estado", $estado, PDO::PARAM_STR);
		$stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);

		if($stmt -> execute()){
            return "El participante se actualizó correctamente";
        }else{
            return "Error, no se pudo actualizar el participante";
        }        

        $stmt = null;
	}
	

}