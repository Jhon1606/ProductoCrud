<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Formulario -->
            <form action="../Controlador/add.php" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control" type="number" placeholder="Codigo..." name="codigo" required="" aria-label="Codigo...">
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="text" placeholder="Nombre del producto..." name="nombre" required="" aria-label="Nombre del producto...">
                    </div>

                    <div class="mb-3">
                        <label for="inputFecha" class="form-label">Fecha de Creación</label>
                        <input class="form-control" type="date" name="fecha_creacion" required="" aria-label="Fecha de creacion">
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio Costo..." name="precio_costo" required="" aria-label="Precio Costo">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio Venta..." name="precio_venta" required="" aria-label="Precio Venta">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>