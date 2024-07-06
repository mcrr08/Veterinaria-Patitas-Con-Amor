<center>
        <form class="user" action="guardar.php" method="POST">

                <div class="form-group">
                        <label for="documento">nombre</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingrese el nombre  " required name="nombre">
                </div>
                <div class="form-group">
                        <label for="documento">edad</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingrese su edad" required name='edad'>
                </div>
                <div class="form-group">
                        <label for="documento">raza</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingrese la raza del animal" required name='raza'>
                </div>
                <div class="form-group">
                        <label for="documento">genero</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingrese el genero" required name='genero'>
                </div>
                <div class="form-group">
                        <label for="documento">fechaNcto</label> 
                        <input type="date" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name='fechaNcto' placeholder="Ingrese la fecha de nacimiento" required >
                </div>
                <div class="form-group">
                        <label for="documento">alergias</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name='alergias' placeholder="Ingrese las alergias del animal" required >
                </div>
                <div class="form-group">
                        <label for="documento">vacunas</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name='vacunas' placeholder="Ingrese las vacunas que tiene" required >
                </div>
                <input type="submit" value="enviar" />
</center>