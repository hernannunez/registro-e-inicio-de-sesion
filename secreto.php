
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css"
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="estilo.css"   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
        <header>
            <nav>
               <?php include_once("navbar.php"); ?>
            </nav>
        </header>
    <main>
    <?php
        include_once("funciones.php");
        if (isset($_POST["enviar"]) && $_POST["nombreUsuario"] != "" && $_POST["emailUsuario"] != "" && $_POST["contrasenaUsuario"] != "") {
            $nombreUsuario = $_POST["nombreUsuario"];
            $emailUsuario = $_POST["emailUsuario"];
            $passUs = md5($_POST["contrasenaUsuario"]);
            echo signin($nombreUsuario, $emailUsuario, $passUs);
        } else {

        ?>
        <h1 class=" text-center text-cust"><br> Formulario </br></h1>
        <div class="container p-5">
            <form action="funciones.php" method="POST">
                <div class="mb-3">
                  <label class=form-label>Nombre</label>
                  <input type="text" class="form-control" name="nombreUsuario">
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control"  name="emailUsuario">
                </div>
                <div class="mb-3">
                  <label class="form-label">Contraseña</label>
                  <input type="password" name="contrasenaUsuario"  class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" name="enviar">Enviar datos</button>
            </form>
        </div>
         
        <?php
        }
        ?>
    </main>
    <footer>
        <?php include_once("footer.php"); ?>
    </footer>
</body>
</html>
