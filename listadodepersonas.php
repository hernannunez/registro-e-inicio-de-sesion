<?php
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="estilo.css"   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
            <div class="row">
                <div class="col-12 text-center p-5">
                    <h1>Listado de registros</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover border">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>DNI</th>
                        </tr>

                        <?php

                        for($i = 0; $i < count($registros); $i++){
                            echo "<tr>";
                            echo "<td>" . $registros[$i]["nombre"] . "</td>";
                            echo "<td>" . $registros[$i]["apellido"] . "</td>";
                            echo "<td>" . $registros[$i]["email"] . "</td>";
                            echo "<td>" . $registros[$i]["DNI"] . "</td>";
                        }

                        ?>
                    </table>
                </div>
            </div>
    </div>
</body>
</html>
