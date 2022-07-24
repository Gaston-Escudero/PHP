<?php 

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Datos Personales</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <main class="conteiner">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Formulario de Datos Personales</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mx-5">
                <form action="resultado.php" method="POST">
                    <div class="pb-3">
                        <label for="txtNombre">Nombre</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtDni">DNI</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtTelefono">Teléfono</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtEdad">Edad</label>
                        <input type="text" name="txtEdad" id="txtEdad" class="form-control">
                    </div>
                    <div class="pb-3">
                        <button type="submit" class="btn btn-primary">
                            ENVIAR
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </main>
    
</body>
</html>