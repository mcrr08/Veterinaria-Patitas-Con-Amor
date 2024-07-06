<?php
include('conexion.php');

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$raza = $_POST['raza'];
$genero = $_POST['genero']; 
$fechaNcto = $_POST['fechaNcto'];
$alergias = $_POST['alergias'];
$vacunas = $_POST['vacunas'];

$query= "INSERT INTO `pacientes`(`nombre`, `edad`, `raza`, `genero`,`fechaNcto`,`alergias`,`vacunas`) VALUES ('$nombre', '$edad', '$raza', '$genero', '$fechaNcto', '$alergias', '$vacunas')";
$resultado= $conexion->query($query);


if ($resultado){
    header("location:mostrar.php");
   }
{
    echo"no se insertó el registro";   
}
