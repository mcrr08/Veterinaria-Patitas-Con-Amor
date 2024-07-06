<center>
        <form class="user" action="guardar_medico.php" method="POST">

                <div class="form-group">
                        <label for="documento">documento</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name='documento' placeholder="Ingrese el documento" required >
                </div>
                <div class="form-group">
                        <label for="nombre">nombre</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name='nombre' placeholder="Ingrese el nombre del medico" required>
                </div>
                <div class="form-group">
                        <label for="apellido">apellido</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name='apellido' placeholder="Ingrese el apellido" required >
                </div>
                <div class="form-group">
                        <label for="documento">fechaNcto</label>
                        <input type="date" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name='fechaNcto' placeholder="Ingrese la fecha de nacimiento" required>
                </div>
                <div class="form-group">
                        <label for="genero">genero</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name='genero' placeholder="Ingrese el genero" required >
                </div>
                <div class="form-group">
                        <label for="direccion">direccion</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name='direccion' placeholder="Ingrese la direccion" required >
                </div>
                <div class="form-group">
                        <label for="documento">telefono</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name='telefono' placeholder="Ingrese el numero de telefono" required >
                </div>
                <div class="form-group">
                        <label for="enfermedadTratante">enfermedadTratante</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name='enfermedadTratante' placeholder="Ingrese la enfermedad que se va a tratar " required >
                </div>
                <input type="submit" value="enviar" />
</center>