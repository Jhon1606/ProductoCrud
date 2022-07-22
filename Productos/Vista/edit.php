<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Formulario -->
            <form action="../Controlador/edit.php" method="POST" >
            <input type="hidden" id="ideditar" name="id_producto">

                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control" type="number" placeholder="Codigo..." name="codigo" id="codigo" aria-label="Codigo">
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="text" placeholder="Nombre del producto..." name="nombre" id="nombre" aria-label="Nombre del producto">
                    </div>

                    <div class="mb-3">
                        <label for="inputFecha" class="form-label">Fecha de Creación</label>
                        <input class="form-control" type="date" name="fecha_creacion" id="fecha_creacion" aria-label="Fecha de creacion">
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio Costo..." name="precio_costo" id="precio_costo" aria-label="Precio Costo">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio Venta..." name="precio_venta" id="precio_venta" aria-label="Precio Venta">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>