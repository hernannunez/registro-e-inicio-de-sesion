?php
            $registros = array();

            $registros[] = array("nombre" => "Javier",
                "apellido" => "Gomez",
                "email" => "jGomez@gmail.com",
                "DNI" => "22.222.222"

            ); 
            $registros[] = array("nombre" => "Pablo",
                "apellido" => "Torres",
                "email" => "pTorres@gmail.com",
                "DNI" => "33.333.333"

            );  
            $registros[] = array("nombre" => "Ana",
                "apellido" => "Maria",
                "email" => "aMaria@gmail.com",
                "DNI" => "44.444.444"

            );  
            $registros[] = array("nombre" => "Juan",
                "apellido" => "Perez",
                "email" => "jPerez@gmail.com",
                "DNI" => "55.555.555"

            );  
            $registros[] = array("nombre" => "Maria",
                "apellido" => "Elena",
                "email" => "mElena@gmail.com",
                "DNI" => "66.666.666"

            ); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="estilo.css"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
        <header>
        <nav>
            <?php include_once("navbar.php"); ?>
        </nav>
        </header>
    <main>
        <div class="container-fluid">
            <div class="row">
            <?php
                include_once("listadodepersonas.php");
            ?>
            </div>
        </div>
    </main>
    <footer> 
        <?php include_once("footer.php"); ?>
    </footer>
</body>
</html>
