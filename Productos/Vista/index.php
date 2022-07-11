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
                        <tr>
                            <th>1</th>
                            <td>1802</td>
                            <td>Televisor</td>
                            <td>1.200.550</td>
                            <td>1.500.000</td>
                            <td>
                                <a href="Javascript:void()" onclick="modalEditar()"><button type="button" class="btn btn-success" title="Editar"><i class="bi bi-pencil-fill"></i> Editar</button></a>
                                <a href="Javascript:void()" onclick="modalEliminar()"><button type="button" class="btn btn-danger" title="Eliminar"><i class="bi bi-trash3"></i> Eliminar </button></a>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>1803</td>
                            <td>Nevera</td>
                            <td>1.700.000</td>
                            <td>2.200.000</td>
                            <td>
                                <a href="Javascript:void()" onclick="modalEditar()"><button type="button" class="btn btn-success" title="Editar"> <i class="bi bi-pencil-fill"></i> Editar</button></a>
                                <a href="Javascript:void()" onclick="modalEliminar()"><button type="button" class="btn btn-danger" title="Eliminar"><i class="bi bi-trash3"></i> Eliminar </button></a>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>1804</td>
                            <td>Lavadora</td>
                            <td>1.300.000</td>
                            <td>1.600.000</td>
                            <td>
                                <a href="Javascript:void()" onclick="modalEditar()"><button type="button" class="btn btn-success" title="Editar"><i class="bi bi-pencil-fill"></i> Editar</button></a>
                                <a href="Javascript:void()" onclick="modalEliminar()"><button type="button" class="btn btn-danger" title="Eliminar"><i class="bi bi-trash3"></i> Eliminar </button></a>
                            </td>
                        </tr>
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