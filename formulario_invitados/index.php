<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Si existe el archivo invitados lo abrimos y cargamos en una variable del tipo array
//los DNIs permitidos
if(file_exists("invitados.txt")){
    $archivo = fopen("invitados.txt", "r");
    $aDocumentos = fgetcsv($archivo, 0, ",");

} else {
    $aDocumentos = array();
}


//Si no el array queda como un array vacio

if($_POST){

    if(isset($_POST["btnProcesar"])){
        $documento = $_REQUEST["txtDni"];

        //Si el DNI ingresado se encuentra en la lista se mostrara un mensaje de bienvenido a la fiesta
        if(in_array($documento, $aDocumentos)){
            $mensaje = "Bienvenido.";
       } else{ 
            $mensaje ="No se encuentra en la lista de invitados.";
       }
    }

    if(isset($_POST["btnVip"])){
        $codigo = $_REQUEST["txtCodigo"];
        //Si el codigo es verde entonces mostrará su codigo de acceso es.....
        if($codigo == "verde"){
            $mensaje = "Su código de acceso es" . rand(1000, 9999);
        } else {
            $mensaje = "Ud. no tiene pase VIP";
        }
        //Si no ud. no tiene pase VIP
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Invitados</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1>Listado de Invitados</h1>
            </div>
            <?php if (isset($mensaje)): ?>
            <div class="col-12">
                <div class="alert alert-info" role="alert">
                    <?php echo $mensaje; ?>
                </div>
            </div>
            <?php endif;?>
            <div class="col-12 py-3">
                <p>Complete el siguiente formulario:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="" class="pb-1">Ingrese el DNI:</label>
                        <input type="txt" name="txtDni" class="form-control">
                    </div>
                    <div class="mb-5">
                    <button type="submit"  name="btnProcesar" class="btn btn-primary d-inline">Verificar Invitado</button>
                    </div>
                    <div class="mb-3">
                        <label for="" class="pb-1">Ingresa el código para el pase VIP:</label>
                        <input type="txt" name="txtCodigo" class="form-control">
                    </div>
                    <div class="mb-5">
                    <button type="submit"  name="btnVip" class="btn btn-primary d-inline">Verificar Código</button>
                    </div>
                    
                </form>

            </div>
            
        </div>
    </main>
    
</body>
</html>