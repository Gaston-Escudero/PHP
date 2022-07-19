<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados[] = array(
    "dni" =>"33300123",
    "nombre" =>"David García",
    "bruto" => 85000.30,
);
$aEmpleados[] = array(
    "dni" =>"40874456",
    "nombre" =>"Ana del Valle",
    "bruto" => 90000,
);

$aEmpleados[] = array(
    "dni" =>"67567565",
    "nombre" =>"Andrés Perez",
    "bruto" => 100000,
);

$aEmpleados[] = array(
    "dni" =>"757445545",
    "nombre" =>"Victoria Luz",
    "bruto" => 70000,
);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listados de Productos</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de Empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                   <thead>    
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Sueldo</th>                            
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php
                        $sumatoriaPrecio=0;
                        for ($contador=0;$contador<count($aProductos);$contador++){
                       
                        $sumatoriaPrecio += $aProductos[$contador]["precio"];
                    ?>
                         
                        <tr>
                            <td><?php echo $aProductos[$contador]["nombre"]; ?></td>
                            <td><?php echo $aProductos[$contador]["marca"]; ?></td>
                            <td><?php echo $aProductos[$contador]["modelo"]; ?></td>
                        </tr>
                    <?php
                    }             
                    ?>    
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-12">
                <p>El subtotal es=<?php echo $sumatoriaPrecio?></p>
                </div>

            </div>

        </div>

    </main>
    
</body>
</html>