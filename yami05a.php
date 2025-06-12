<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$username = "root";
$password = "";
$servername = "localhost";
$database = "cetis131";
$conexion = new mysqli($servername, $username, $password, $database);

if($conexion->connect_error){
    die("La conexión falló: " . $conexion->connect_error);
}

// Consultas para los dropdowns
$sql_edad = "SELECT id, edad FROM edades";
$result_edad = $conexion->query($sql_edad);

$sql_colonia = "SELECT id, colonias FROM colonia";
$result_colonia = $conexion->query($sql_colonia);

$sql_especialidad = "SELECT id, especialidad FROM especialidad";
$result_especialidad = $conexion->query($sql_especialidad);

$sql_genero = "SELECT id, genero FROM genero";
$result_genero = $conexion->query($sql_genero);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $numero_control = $conexion->real_escape_string($_POST["numero_control"]);
    $nombre = $conexion->real_escape_string($_POST["nombre"]);
    $apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
    $apellido_materno = $conexion->real_escape_string($_POST["apellido_materno"]);
    $id_edad = $conexion->real_escape_string($_POST["edad"]);
    $id_colonia = $conexion->real_escape_string($_POST["colonia"]);
    $id_especialidad = $conexion->real_escape_string($_POST["especialidad"]);
    $id_genero = $conexion->real_escape_string($_POST["genero"]);
    $correo = $conexion->real_escape_string($_POST["correo"]);
    $telefono = $conexion->real_escape_string($_POST["telefono"]);
    $fecha_ingreso = $conexion->real_escape_string($_POST["fecha_ingreso"]);

    $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, 
            id_edad, id_colonia, id_especialidad, id_genero, correo, telefono, fecha_ingreso)
            VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', 
            '$id_edad', '$id_colonia', '$id_especialidad', '$id_genero', '$correo', '$telefono', '$fecha_ingreso')";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Nuevo alumno agregado con éxito');</script>";
        echo "<script>window.location.href = '".$_SERVER['PHP_SELF']."';</script>";
        exit();
    } else {
        echo "<script>alert('Error: " . $conexion->error . "');</script>";
    }
}
ob_start();
?>

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
    </thead>
    <tbody>
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
                        <a class="dropdown-item" href="yami06.php">Practica 6</a><br>
                    </div>
                </li>
             </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UNIDAD 3</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="yami05a.php">Practica 7</a><br>
                            <a class="dropdown-item" href="yami08.php">Practica 8</a><br>
                            <a class="dropdown-item" href="yami09.php">Practica 9</a><br>
                            <a class="dropdown-item" href="yami10.php">Practica Final</a><br>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


        <h1>REGISTRO DE ALUMNOS</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="formulario">
            <div class="form-group">
                <label for="numero_control">Número de control:</label>
                <input type="text" class="form-control" id="numero_control" name="numero_control" required>
            </div>
            
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            
            <div class="form-group">
                <label for="apellido_paterno">Apellido paterno:</label>
                <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" required>
            </div>
            
            <div class="form-group">
                <label for="apellido_materno">Apellido materno:</label>
                <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" required>
            </div>
            
            <div class="form-group">
                <label for="edad">Edad:</label>
                <select class="form-control" name="edad" id="edad" required>
                    <option value="">Seleccione una edad</option>
                    <?php while ($row = $result_edad->fetch_assoc()): ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['edad']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="colonias">Colonia:</label>
                <select class="form-control" name="colonia" id="colonias" required>
                    <option value="">Seleccione una colonia</option>
                    <?php while ($row = $result_colonia->fetch_assoc()): ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['colonias']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="especialidad">Especialidad:</label>
                <select class="form-control" name="especialidad" id="especialidad" required>
                    <option value="">Seleccione una especialidad</option>
                    <?php while ($row = $result_especialidad->fetch_assoc()): ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['especialidad']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="genero">Género:</label>
                <select class="form-control" name="genero" id="genero" required>
                    <option value="">Seleccione un género</option>
                    <?php while ($row = $result_genero->fetch_assoc()): ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['genero']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="correo">Correo electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            
            <div class="form-group">
                <label for="fecha_ingreso">Fecha de Ingreso:</label>
                <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
            </div>
            
            <input type="submit" class="btn btn-primary" value="Agregar alumno">
        </form>
    </div>z

    <h1>LISTA DE ALUMNOS</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Número de control</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Edad</th>
                    <th>Colonia</th>
                    <th>Especialidad</th>
                    <th>Género</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Fecha de Ingreso</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Reabrir conexión si se cerró
                if($conexion->connect_error){
                    $conexion = new mysqli($servername, $username, $password, $database);
                }
                
                $sql = "SELECT 
                        a.numero_control,
                        a.nombre,
                        a.apellido_paterno,
                        a.apellido_materno,
                        e.edad,
                        c.colonias,
                        es.especialidad,
                        g.genero,
                        a.correo,
                        a.telefono,
                        a.fecha_ingreso
                    FROM alumnos a
                    JOIN edades e ON a.id_edad = e.id
                    JOIN colonia c ON a.id_colonia = c.id
                    JOIN especialidad es ON a.id_especialidad = es.id
                    JOIN genero g ON a.id_genero = g.id";
                
            $resultado = $conexion-> query($sql);
                
                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['numero_control']}</td>
                                <td>{$row['nombre']}</td>
                                <td>{$row['apellido_paterno']}</td>
                                <td>{$row['apellido_materno']}</td>
                                <td>{$row['edad']}</td>
                                <td>{$row['colonias']}</td>
                                <td>{$row['especialidad']}</td>
                                <td>{$row['genero']}</td>
                                <td>{$row['correo']}</td>
                                <td>{$row['telefono']}</td>
                                <td>{$row['fecha_ingreso']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='11' class='text-center'>No hay alumnos registrados.</td></tr>";
                }
            $conexion->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>