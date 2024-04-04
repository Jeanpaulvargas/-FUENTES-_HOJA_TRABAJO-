<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero de Damas Chinas</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .tablero {
            border: 2px solid black;
            padding: 10px;
            background-color: #c2d1ff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .fila {
            display: flex;
        }

        .casilla {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .blanco {
            background-color: white;
        }

        .negro {
            background-color: black;
        }

        .ficha-filas1-3 {
            width: 80%;
            height: 80%;
            border-radius: 50%;
            background-color: red;
        }

        .ficha-filas4-6 {
            width: 80%;
            height: 80%;
            border-radius: 50%;
            background-color: blue;
        }
    </style>
</head>

<body>
    <div class="tablero">
        <h1 style="text-align: center;">Tablero de Damas Chinas</h1>
        <?php

        $filas = 8;
        $columnas = 8;

        for ($fila = 0; $fila < $filas; $fila++) {
            echo '<div class="fila">';
            for ($columna = 0; $columna < $columnas; $columna++) {

                if (($fila + $columna) % 2 == 0) {
                    $clase_casilla = 'blanco';
                } else {
                    $clase_casilla = 'negro';
                }


                if ($clase_casilla == 'negro') {
                    if ($fila < 3) {

                        $ficha = '<div class="ficha-filas1-3"></div>';
                    } elseif ($fila >= 3 && $fila < 6) {

                        $ficha = '<div class="ficha-filas4-6"></div>';
                    } else {
                        $ficha = '';
                    }
                } else {
                    $ficha = '';
                }


                echo '<div class="casilla ' . $clase_casilla . '">' . $ficha . '</div>';
            }
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>