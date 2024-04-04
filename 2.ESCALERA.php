<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escalera</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .escalera {
            margin-top: 50px;
            width: 400px;
        }

        .piso {
            display: flex;
            justify-content: flex-start;
            margin-bottom: 5px;
        }

        .espacio {
            width: 30px;
            height: 30px;
            background-color: transparent;
            border: none;
        }

        .numero {
            width: 30px;
            height: 30px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .resultado {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="escalera bg-light p-3">
                    <?php
                    if (isset($_POST["pisos"]) && isset($_POST["operacion"])) {
                        $pisos = $_POST["pisos"];
                        $operacion = $_POST["operacion"];
                        $numeros = array();

                        if ($pisos >= 5 && $pisos <= 8) {
                            $contador = 1;
                            for ($i = 1; $i <= $pisos; $i++) {
                                echo '<div class="piso">';
                                for ($j = 1; $j <= $i; $j++) {
                                    echo '<div class="numero">' . $contador . '</div>';
                                    $numeros[] = $contador;
                                    $contador++;
                                }
                                for ($k = $i; $k < $pisos; $k++) {
                                    echo '<div class="espacio"></div>';
                                }
                                echo '</div>';
                            }


                            $resultado = ($operacion == "suma") ? array_sum($numeros) : array_product($numeros);
                            echo '<div class="resultado">';
                            echo '<p class="lead">Resultado de la operación ' . $operacion . ': ' . $resultado . '</p>';
                            echo '</div>';
                        } else {
                            echo '<p class="text-danger">Ingrese un número de pisos válido (entre 5 y 8).</p>';
                        }
                    }
                    ?>
                </div>
                <form method="post" action="" class="mt-4">
                    <div class="form-group">
                        <label for="pisos" class="lead">Número de pisos (5-8):</label>
                        <input type="number" id="pisos" name="pisos" min="5" max="8" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="operacion" class="lead">Seleccione la operación:</label>
                        <select id="operacion" name="operacion" class="form-control" required>
                            <option value="suma">Suma</option>
                            <option value="multiplicacion">Multiplicación</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Dibujar escalera</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>