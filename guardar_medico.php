<?php
include('conexion.php');

$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fechaNcto = $_POST['fechaNcto'];
$genero = $_POST['genero'];
$telefono = $_POST['telefono'];
$enfermedadTratante = $_POST['enfermedadTratante'];



$query= "INSERT INTO `medico`(`documento`, `nombre`, `apellido`, `fechaNcto`, `genero`, `direccion`, `telefono`, `enfermedadTratante`) VALUES ('$documento', '$nombre', '$apellido','$fechaNcto', '$genero', '$telefono', '$enfermedadTratante')";

$resultado = $conexion->query($query);


if ($resultado){
    header("location:mostrar_medico.php");
} else {
    echo "no se insertó el registro";
}
