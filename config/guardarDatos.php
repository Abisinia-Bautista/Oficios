<?php

require_once 'conection.php';

    $oficio  = $_POST['oficio'];
	$asunto = $_POST['asunto'];
	$corresponde = $_POST['corresponde'];
	$cargo = $_POST['cargo'];
	$dependencia = $_POST['dependencia'];
	$lema = $_POST['lema'];
	$contenido = $_POST['contenido'];
    $firma = $_POST['firma'];
    $entidad = $_POST['entidad'];

$database = new Database();
$db = $database->getConnection();

if ($db) {
    try {

        $stmt = $db->prepare("INSERT INTO oficios (NoOficio, Asunto, Dirigido, Cargo, Dependencia, Lema, Contenido, firma, entidad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bindParam($oficio, $asunto, $corresponde, $cargo, $dependencia, $lema, $contenido, $firma, $entidad);

        if ($stmt->execute()) {
            echo "Datos insertados correctamente.";
        } else {
            echo "Error al insertar los datos.";
        }
    } catch(PDOException $exception) {
        echo "Error: " . $exception->getMessage();
    }
} else {
    echo "Error al conectarse a la bd";
}
?>
