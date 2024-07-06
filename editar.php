<?php
    include("conexion.php");
    $idAnimalEspecie = $_REQUEST["idAnimalEspecie"];
    $query = "SELECT * FROM pacientes WHERE idAnimalEspecie ='$idAnimalEspecie '";
    $resultado = $conexion->query($query);
    $row = $resultado->fetch_assoc();  
    ?>

<center>
<form class="user" action="pro_editar.php" method="POST">

<input type="hidden" name="idAnimalEspecie" value="<?php echo $row['idAnimalEspecie']; ?> ">
<br>

<label for="nombre">nombre</label>
<input type="text" name="nombre del paciente "
placeholder="ingrese el nombre del paciente " value="<?php echo $row  ['nombre']; ?>"required >
<br>
<label for="edad">edad</label>
<input type="text"  name="edad"
placeholder="ingrese la edad " value="<?php echo $row  ['edad']; ?>"required>
<br>
<label for="raza">raza</label>
<input type="text" name="raza"
placeholder="ingrese la raza de la mascota" value="<?php echo $row  ['raza']; ?>"required >
<br>    
<label for="genero">genero</label>
<input type="text" name="genero"
placeholder="ingrese el genero de la mascota " value="<?php echo $row  ['genero']; ?>"required >
<br>
<label for="fecha de naciminento">fecha de naciminento</label>
<input type="date" name="fechaNcto"
placeholder="ingrese la fecha de nacimiento de la mascota " value="<?php echo $row  ['fechaNcto']; ?>"required >
<br>
<label for="alergias">alergias</label>
<input type="text" name="alergias"
placeholder="ingrese el tipo de alergias que tiene la mascota " value="<?php echo $row  ['alergias']; ?>"required >
<br>
<label for="vacunas">vacunas</label>
<input type="text" name="vacunas"
placeholder="ingrese las vacunas que tiene la mascota" value="<?php echo $row  ['vacunas']; ?>"required >
<br>


    <input   class="btn btn-facebook btn-user btn-block" type= "submit" value="enviar" />
    <div class="text-center">
        </form>