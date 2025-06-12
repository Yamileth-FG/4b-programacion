<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&display=swap" rel="stylesheet">

    <title>Mostrar Datos Relacionados</title>

    <style>
        body {
            background-color: #ffe6eb;
            font-family: 'Playfair Display', serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: rgb(241,77,113);
            text-align: center;
            padding: 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 500;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #f34671;
        }

        h1 {
            text-align: center;
            color: rgb(241,77,113);
            font-weight: 700;
            margin-top: 20px;
        }

        form {
            background: #ffc2d1;
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #333;
            font-weight: 500;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #f17d92;
            border-radius: 5px;
            margin-bottom: 10px;
            font-family: 'Playfair Display', serif;
        }

        input[type="submit"] {
            background: rgb(241,77,113);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 20px auto;
            font-size: 16px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #ff5c8a;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: #ffc2d1;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #f17d92;
        }

        th {
            background-color: rgb(241,77,113);
            color: white;
        }

        tr:nth-child(even) {
            background-color: #ffd6e0;
        }

        .success {
            color: green;
            text-align: center;
            font-weight: bold;
        }

        .error {
            color: red;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

      <!-- Barra de navegación -->
    <nav class="navbar navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">INICIO</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UNIDAD 1</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="yami01.php">Practica 1</a><br>
                            <a class="dropdown-item" href="yami02.php">Practica 2</a><br>
                            <a class="dropdown-item" href="yami03.php">Practica 3</a><br>
                        </div>
                    </li>
                </ul>
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UNIDAD 2</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="yami04.php">Practica 4</a><br>
                        <a class="dropdown-item" href="yami05.php">Practica 5</a><br>
                        <a class="dropdown-item" href="yami06.html">Practica 6</a><br>
                    </div>
                </li>
             </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UNIDAD 3</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="yami05a.php">Practica 7</a><br>
                            <a class="dropdown-item" href="yami07.html">Practica 8</a><br>
                            <a class="dropdown-item" href="yami08.html">Practica 9</a><br>
                            <a class="dropdown-item" href="yami09.html">Practica Final</a><br>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <h1> AGREGAR ALUMNOS</h1>

    <div class="container1" style="max-width:600px; margin:auto;">
    <form method="POST" id="formulario">
        <label for="numero_control">Numero de control</label>
        <input type="text" id="numero_control" name="numero_control" required></br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required></br>

        <label for="apellido_paterno">Apellido paterno:</label>
        <input type="text" id="apellido_paterno" name="apellido_paterno" required></br>

        <label for="apellido_materno">Apellido materno:</label>
        <input type="text" id="apellido_materno" name="apellido materno" required></br>

        <label for="edad">Edad:</label>
        <input type="text" id="edad" name="edad-" required></br>

        <label for="colonia">Colonia:</label>
        <input type="text" id="colonia" name="colonia" required></br>

        <label for="especialidad">Especialidad:</label>
        <input type="text" id="especialidad" name="especialidad" required></br>

        <label for="genero">Genero:</label>
        <input type="text" id="genero" name="genero" required></br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required></br>

        <label for="telefono">Telefono:</label>
        <input type="text" id="telefono" name="telefono" required></br>

        <label for="fecha_ingreso">Fecha de Ingreso:</label>
        <input type="text" id="fecha_ingreso" name="fecha_ingreso" required></br>

        <input type="submit" value="Agregar alumno">




        <input type="submit" value="Agregar al Registro">
    </form>

    <?php
    //Estas dos lineas me dicen que errores tengo
    error_reporting(E_ALL);
    ini_set(`display_errors`, 1);
    //Estas lineas siempre estaran presentes, ya que me conectan al serviddor
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "cetis131";

    $conexion = new mysqli($servername, $username, $password, $database);

    if ($conexion->connect_error) {
        die("<p class='error'>Conexión Fallida: " . $conexion->connect_error . "</p>");
    }
     
      function insertarAlumno($conexion){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            var_dump($_POST); //Linea para depuracion
            $numero_control = $conexion->real_escape_string($_POST["numero_control"]);
            $nombre = $conexion->real_escape_string($_POST["nombre"]);
            $apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
            $apellido_materno = $conexion->real_escape_string($_POST["apellido_materno"]);
            $edad = $conexion->real_escape_string($_POST["edad"]);
            $colonia = $conexion->real_escape_string($_POST["colonia"]);
            $especialidad = $conexion->real_escape_string($_POST["especialidad"]);
            $genero = $conexion->real_escape_string($_POST["genero"]);
            $correo = $conexion->real_escape_string($_POST["correo"]);
            $telefono = $conexion->real_escape_string($_POST["telefono"]);
            $fecha_ingreso = $conexion->real_escape_string($_POST["fecha_ingreso"]);
            
            $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, edad, colonia, especialidad, genero, correo, telefono, fecha_ingreso)
                        VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$id_edad', '$id_colonia', '$id_especialidad', '$id_genero', '$correo', '$telefono', '$fecha_ingreso')";
                         
                         if ($conexion->query($sql) === TRUE) {
                          echo"<p class='succes'>NUEVO ALMNO AGREGADO CORRECTAMENTE.</p>";
                          header("Location: " . $_SERVER['PHP_SELF']);
                          exit();
                         }else{
                          echo "<p class='error'>ERROR AL AGREGAR EL ALUMNO: " . $conexion->error . "</p>";
                         }

                    }
                  }

                  InsertarAlumno($conexion);
    
    $conexion->close();
    ?>
</body>
</html>