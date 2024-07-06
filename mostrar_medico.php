<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VETERINARIA</title>
</head>

<body>
    <table border="2"  class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
        <thead>

            <tr>
                <th>idMedico</th>
                <th>documento</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>fechaNcto</th>
                <th>genero</th>
                <th>direccion</th>
                <th>telefono</th>
                <th>enfermedadTratante</th>
                <th>editar</th>
                <th>eliminar</th>
            </tr>
        </thead>
        <tbody>


        <?php
        include("conexion.php");
        $query = "SELECT * FROM medico";
        $resultado = $conexion->query($query);
        while ($row = $resultado->fetch_assoc()) {
        ?> 
           
            <tr>   
                <td> <?php echo $row['idMedico'];?></td>
                <td> <?php echo $row['documento'];?></td>
                <td> <?php echo $row['nombre'];?></td>
                <td> <?php echo $row['apellido'];?></td>
                <td> <?php echo $row['fechaNcto'];?></td>
                <td> <?php echo $row['genero'];?></td>
                <td> <?php echo $row['direccion'];?></td>
                <td> <?php echo $row['telefono'];?></td>
                <td> <?php echo $row['enfermedadTratante'];?></td>
                <td><a href="editar.php?idMedico=<?php echo $row['idMedico']; ?>">🖋️</a></td>
                <td><a href="eliminar.php?idMedico=<?php echo $row['idMedico']; ?>">❎</a></td>
            </tr>
        <?php
            }     
        ?> 
        </tbody>
    </table> 

        <button onclick="window.location.href = 'registro_medico.php';"  class="btn btn-facebook btn-user btn-block"
        >nuevo </button>