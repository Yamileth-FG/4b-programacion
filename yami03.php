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


    <h1>AGREGAR PRODUCTOS</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="nombre">Nombre del producto:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion" required>

        <label for="talla">Talla:</label>
        <input type="text" id="talla" name="talla" required>

        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required>

        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" required>

        <label for="stock">Stock:</label>
        <input type="text" id="stock" name="stock" required>

        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria" required>

        <input type="submit" value="Agregar al Registro">
    </form>

    <?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "yamishop";

    $conexion = new mysqli($servername, $username, $password, $database);

    if ($conexion->connect_error) {
        die("<p class='error'>Conexión Fallida: " . $conexion->connect_error . "</p>");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $conexion->real_escape_string($_POST["nombre"]);
        $descripcion = $conexion->real_escape_string($_POST["descripcion"]);
        $talla = $conexion->real_escape_string($_POST["talla"]);
        $color = $conexion->real_escape_string($_POST["color"]);
        $precio = $conexion->real_escape_string($_POST["precio"]);
        $stock = $conexion->real_escape_string($_POST["stock"]);
        $categoria = $conexion->real_escape_string($_POST["categoria"]);

        $sql = "INSERT INTO productos (nombre, descripcion, talla, color, precio, stock, categoria) 
                VALUES ('$nombre', '$descripcion', '$talla', '$color', '$precio', '$stock', '$categoria')";

        if ($conexion->query($sql) === TRUE) {
            echo "<p class='success'>¡Nuevos datos agregados con éxito!</p>";
            exit();
        } else {
            echo "<p class='error'>Error al agregar datos: " . $conexion->error . "</p>";
        }
    }

    $sql = "SELECT * FROM productos";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Id</th><th>Nombre</th><th>Descripción</th><th>Talla</th><th>Color</th><th>Precio</th><th>Stock</th><th>Categoría</th></tr>";
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr><td>{$row['id_producto']}</td><td>{$row['nombre']}</td><td>{$row['descripcion']}</td>
                  <td>{$row['talla']}</td><td>{$row['color']}</td><td>{$row['precio']}</td><td>{$row['stock']}</td><td>{$row['categoria']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='error'>No se encontraron datos.</p>";
    }

    $conexion->close();
    ?>
</body>
</html>