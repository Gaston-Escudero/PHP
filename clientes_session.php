<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if(isset($_SESSION["listadoClientes"])){
    //Si existe la variable de session listadoClientes asigno su contenido a aClientes
    $aClientes = $_SESSION["listadoClientes"];
} else {
    $aClientes = array();
}

if($_POST){
    //Asignamos en variables los datos que vienen del formulario
    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $telefono = $_POST["txtTelefono"];
    $edad = $_POST["txtEdad"];

    //Creamos un array que contendrá el listado de clientes
    $aClientes[] = array("nombre" => $nombre,
                        "dni" => $dni,
                        "telefono" => $telefono,
                        "edad" => $edad
);
//Actuualiza el contenido de la variable session
$_SESSION["listadoClientes"] = $aClientes;

}
    


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de Clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-1 me-5">
                <form action="" method="POST" class="form">
                    <div class="mb-3">
                        <label for="">Nombre:</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">DNI:</label>
                        <input type="number" id="txtDni" name="txtDni" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Teléfono:</label>
                        <input type="number" id="txtTelefono" name="txtTelefono" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Edad:</label>
                        <input type="number" id="txtEdad" name="txtEdad" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary d-inline">Enviar</button>
                        <button type="submit" class="btn btn-danger d-inline">Eliminar</button>
                    </div>
                </form>
            </div>
            <div class="col-6 ms-5">
                <table class="table table-hover shadow border">
                   <thead>
                        <tr>
                            <th>Nombre:</th>
                            <th>DNI:</th>
                            <th>Teléfono:</th>
                            <th>Edad:</th>
                        </tr>
                   </thead>
                   <tbody>
                        <?php foreach ($aClientes as $cliente): ?>
                            <tr>
                                <td><?php echo $cliente["nombre"]?></td>
                                <td><?php echo $cliente["dni"]?></td>
                                <td><?php echo $cliente["telefono"]?></td>
                                <td><?php echo $cliente["edad"]?></td>
                            </tr>
                        <?php endforeach; ?>
                   </tbody>

                </table>

            </div>

        </div>

    </main>
</body>
</html>