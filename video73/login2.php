<?php

header('Content-Type: application/json');

$el_usuario = isset($_GET['usuario']) ? $_GET['usuario'] : (isset($_POST['usuario']) ? $_POST['usuario'] : '');

$el_array = new stdClass();

if ($el_usuario == "Juan") {
	$el_array->Nombre = "Juan";
	$el_array->Apellido = "Gómez";
	$el_array->Edad = "18";
} else if($el_usuario == "Maria") {
	$el_array->Nombre = "Maria";
	$el_array->Apellido = "Fernandez";
	$el_array->Edad = "27";

} else if($el_usuario == "Antonio") {
	$el_array->Nombre = "Antonio";
	$el_array->Apellido = "Cutillas";
	$el_array->Edad = "48";
} else {
	$el_array->error = "Usuario no encontrado";
}

echo json_encode($el_array);

?>