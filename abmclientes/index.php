<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Preguntar si existe el archivo
if(file_exists("archivo.txt")){
    // Vamos a leerlo y almacenamos el contenido en jsonClientes
    $jsonClientes = file_get_contents("archivo.txt");
    //Convertir jsonClientes en un array llamado aClientes
    $aClientes = json_decode($jsonClientes, true);
} else {
//Si no existe el archivo
    //Creamos un aClientes inicializado como un array vacio
    $aClientes = array();
}

if ($_POST){
    $dni= trim($_POST["txtDni"]);
    $nombre= trim($_POST["txtNombre"]);
    $telefono= trim($_POST["txtTelefono"]);
    $correo= trim($_POST["txtCorreo"]);

    $aClientes[] = array("dni"=> $dni,
                         "nombre"=> $nombre,
                         "telefono"=> $telefono,
                         "correo"=> $correo);
    //Convertir el array de clientes a jsonClientes
    $jsonClientes = json_encode($aClientes);

    //Almacenar el string jsonClientes en el archivo.txt
    file_put_contents("archivo.txt", $jsonClientes);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de Clientes</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Registro de Clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="">DNI: *</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control shadow" required value="">
                    </div>
                    <div class="mb-3">
                        <label for="">Nombre: *</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control shadow" requerid value="">
                    </div>
                    <div class="mb-3">
                        <label for="">Teléfono:</label>
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <label for="">Correo: *</label>
                        <input type="email" name="txtCorreo" id="txtCorreo" class="form-control shadow" requerid value="">
                    </div>
                    <div class="mb-3">
                        <p>Archivo adjunto: <input type="file" name="archivo" id="archivo" accept=".jpg, .jpeg, .png"></p>  
                        <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>                     
                    </div>
                    <div class="mb-3">
                        <button type="submit"  name="btnGuardar" class="btn btn-primary d-inline">Guardar</button>
                        <button type="submit" name="btnNuevo" class="btn btn-danger d-inline">Nuevo</button>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <table class="table table-hover border shadow">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($aClientes as $pos => $cliente): ?>
                            <tr>
                                <td></td>
                                <td><?php echo $cliente["dni"];?></td>
                                <td><?php echo $cliente["nombre"];?></td>
                                <td><?php echo $cliente["telefono"];?></td>
                                <td><?php echo $cliente["correo"];?></td>
                                <td>
                                    <a href=""><i class="bi bi-pencil-fill"></i></a>
                                    <a href=""><i class="bi bi-trash-fill"></i></a>
                                </td>
                                
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
            


    </main>
    
</body>
</html>