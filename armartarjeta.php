<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css"
    <title>Primera web</title>
    <script src="https://kit.fontawesome.com/412f384ddd.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
     <nav>
        <?php include_once("navbar.php"); ?>
     </nav>
    </header>
    <main>
    <form method="POST" action="tarjeta.php">
        Nombre <input type="text" class="form-control" name="nombreUsuario">
        Apellido <input type="text" class="form-control" name="apellidoUsuario">
        Profesion <input type="text" class="form-control" name="profesionUsuario">
        Descripcion <input type="text" class="form-control" name="descripcionUsuario">
        <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
    </form>
    </main>
        <footer>
            <?php include_once("footer.php"); ?>
        </footer>
    </body>
