<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2a3b3d5bf4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>
<body>

<header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pet Wash</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="inicio.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sobre nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Citas</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-secondary me-2"><a class="reg" href="login.php">Iniciar Sesion</a></button>
            <button type="button" class="btn btn-outline-secondary me-2"><a class="reg" href="registro.php">Registrarse</a></button>
          </div>
        </div>
      </nav>

    </header>
    <section class="form-egre">

    <center><h1>Registro empleado</h1></center>

    <form action="login.php"  method="post">

   <p>Nombres:<br> 
   <input type ="text" class="formu" name="nombre_emp" placeholder="" size ="50"></p>
   <p>Apellidos:<br>
   <input type="text" class="formu" name="apellido_emp" placeholder="" size="50"></p>
   <p>Edad:<br>
   <input type="text" class="formu" name="edad_emp" placeholder="" size="50"></p>
   <p>Sexo:<br>
   <input type="text" class="formu" name="sexo_emp" placeholder="" size="50"></p>
   <p>Cedula: <br>
    <input type="text" class="formu" name="cedula_emp" placeholder="" size="50"></p>
    <p>Fecha de nacimiento:<br>
   <input type="text" class="formu" name="nacimiento_emp" placeholder="" size="50"></p>
   <p>Direccion:<br> 
    <input type="text" class="formu" name="direccion_emp" placeholder="" size="50"></p>
    <p>Telefono:<br>
    <input type="text" class="formu" name="telefono_emp" placeholder="" size="50"></p>
   <p>Correo electronico:<br> 
    <input type="text" class="formu" name="correo_emp" placeholder="" size="50"></p>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
    <input type="password" class="formu" name="contra_emp" id="exampleInputPassword1">
    <div id="emailHelp" class="form-text">No comparta su contraseña con nadie</div>
  </div>
    <p>Cargo:<br> 
    <select name="cargo_emp" class="formu">
    <option value="Secador">Secador</option>
    <option value="Peluquero">Peluquero</option>
    <option value="Recepcionista">Recepcionista</option>
    <option value="Masajista">Masajista</option>
    <option value="Pedicurista">Pedicurista</option></select>
   </p>
   <br> 
    <input type="submit" class="botons" value="Registrar">
   
</form> 

</section>
</body>

<br>
<br>
<br>

<!-- Footer -->
<footer class="footer" >
  
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

    <div class="me-5 d-none d-lg-block">
      <span>Conéctate con nosotros en las redes sociales:</span>
    </div>

    <div>
      <a href="https://www.facebook.com/gamerasoft/" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.instagram.com/gamerasoftware/" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Gamera Software
          </h6>
          <p>
            Somos una pequeña empresa que se dedica al cuidado y limpieza de las mascotas. Aqui encontrara el lugar mas
            confortable para su mejor amigo, que espera?, venga ya y haga que su mascota sea feliz.
          </p>
        </div>
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contáctanos</h6>
          <p><i class="fas fa-home me-3"></i> Direccion</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            correo
          </p>
          <p><i class="fas fa-phone me-3"></i>+1 829 621 2814</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="#">PetWash</a>
  </div>
  <!-- Copyright -->
</footer>
</html>


<?php
 require "conexion.php";
 insertar($conexion);
 function insertar ($conexion) {

    $nombre_emp = $_POST['nombre_emp'];
    $apellido_emp = $_POST['apellido_emp'];
    $edad_emp = $_POST['edad_emp'];
    $sexo_emp = $_POST['sexo_emp'];
    $cedula_emp = $_POST['cedula_emp'];
    $nacimiento_emp = $_POST['nacimiento_emp'];
    $direccion_emp = $_POST['direccion_emp'];
    $telefono_emp = $_POST['telefono_emp'];
    $correo_emp = $_POST['correo_emp'];
    $contra_emp = $_POST['contra_emp'];
    $cargo_emp = $_POST['cargo_emp'];

    $consulta = "INSERT INTO empleado (nombre_emp, apellido_emp, edad_emp, sexo_emp, cedula_emp, nacimiento_emp, direccion_emp, 
    telefono_emp, correo_emp, contra_emp, cargo_emp) VALUES ('$nombre_emp','$apellido_emp','$edad_emp','$sexo_emp','$cedula_emp',
    '$nacimiento_emp','$direccion_emp','$telefono_emp','$correo_emp','$contra_emp','$cargo_emp')";
    
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);


 }

?>