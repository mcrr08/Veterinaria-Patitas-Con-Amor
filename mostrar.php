<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VETERINARIA</title>
</head>

<body>
    <table border="2"  class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
        <thead>

            <tr>
                <th>idEspecie</th>
                <th>nombre</th>
                <th>edad</th>
                <th>raza</th>
                <th>genero</th>
                <th>fecha de nacimiento</th>
                <th>alergias</th>
                <th>vacunas</th>
                <th>editar</th>
                <th>eliminar</th>
            </tr>
        </thead>
        <tbody>


        <?php
        include("conexion.php");
        $query = "SELECT * FROM pacientes";
        $resultado = $conexion->query($query);
        while ($row = $resultado->fetch_assoc()) {
        ?> 
           
            <tr>   
                <td> <?php echo $row['idAnimalEspecie'];?></td>
                <td> <?php echo $row['nombre'];?></td>
                <td> <?php echo $row['edad'];?></td>
                <td> <?php echo $row['raza'];?></td>
                <td> <?php echo $row['genero'];?></td>
                <td> <?php echo $row['fechaNcto'];?></td>
                <td> <?php echo $row['alergias'];?></td>
                <td> <?php echo $row['vacunas'];?></td>
              
                <td><a href="editar.php?idAnimalEspecie=<?php echo $row['idAnimalEspecie']; ?>">🖋️</a></td>
                <td><a href="eliminar.php?idAnimalEspecie=<?php echo $row['idAnimalEspecie']; ?>">❎</a></td>
            </tr>
        <?php
            }     
        ?> 
        </tbody>
    </table> 

        <button onclick="window.location.href = 'registro.php';"  class="btn btn-facebook btn-user btn-block"
        >nuevo </button>