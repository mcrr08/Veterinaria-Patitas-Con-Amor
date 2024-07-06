<?php
include("conexion.php");
$idAnimalEspecie = $_REQUEST['idAnimalEspecie'];

$query = "DELETE FROM `pacientes` WHERE `idAnimalEspecie`='$idAnimalEspecie'";

$resultado = $conexion->query($query);
if($resultado){
    header("Location: mostrar.php");
}
else
{
    echo(" No se pudo eliminar");
}
?>