<?php
    require_once('../Modelo/producto.php');

    $modeloProducto= new producto();
    $productos = $modeloProducto->get();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="noopener"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5 my-3">
        <div class="row p-2">
            <div class="col">
                <a href="Javascript:void()" onclick="modalAñadir()"><button type="button" class="btn btn-info" title="Añadir"><i class="bi bi-plus-lg"></i> Añadir </button></a> 
            </div>
        </div>

        <div class="row p-2">
            <div class="col">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Precio Costo</th>
                            <th scope="col">Precio Venta</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php         
                        if($productos != null){ 
                            foreach($productos as $producto){
                    ?>
                        <tr>
                            <th><?php echo $producto['id_producto']; ?></th>
                            <td><?php echo $producto['codigo']; ?></td>
                            <td><?php echo $producto['nombre']; ?></td>
                            <td><?php echo $producto['precio_costo']; ?></td>
                            <td><?php echo $producto['precio_venta']; ?></td>
                            <td>
                                <a href="Javascript:void()" onclick="modalEditar(<?php echo $producto['id_producto']; ?>)"><button type="button" class="btn btn-success" title="Editar"><i class="bi bi-pencil-fill"></i> Editar</button></a>
                                <a href="Javascript:void()" onclick="modalEliminar(<?php echo $producto['id_producto']; ?>)"><button type="button" class="btn btn-danger" title="Eliminar"><i class="bi bi-trash3"></i> Eliminar </button></a>
                            </td>
                        </tr>
                    <?php
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
        require_once('add.php');
    ?>

    <?php
        require_once('edit.php');
    ?>

    <?php
        require_once('delete.php');
    ?>
    
    <script src="../../Public/js/javascript.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>