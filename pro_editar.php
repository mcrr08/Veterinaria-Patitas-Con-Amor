<?php
include("conexion.php");
$idAnimalEspecieid = $_POST['idAnimalEspecie'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$raza = $_POST['raza'];
$genero = $_POST['genero'];
$fechaNcto = $_POST['fechaNcto'];
$alergias = $_POST['alergias'];
$vacunas = $_POST['vacunas'];


$query = "UPDATE pacientes SET nombre='$nombre', edad='$edad',raza='$raza',genero='$genero',fechaNcto='$fechaNcto',alergias='$alergias',vacunas='$vacunas' WHERE idAnimalEspecie='$idAnimalEspecie'";


$resultado = $conexion->query($query);
if ($resultado){
    header("Location: mostrar.php");
}
else
{
    echo " no se realizo la actualizacion";
}
?>