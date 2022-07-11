<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Formulario -->
            <div class="modal-body">
                <div class="mb-3">
                    <input class="form-control" type="number" placeholder="Codigo..." aria-label="default input example">
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Nombre del producto..." aria-label="default input example">
                </div>

                <div class="mb-3">
                    <label for="inputFecha" class="form-label">Fecha de Creación</label>
                    <input class="form-control" type="date" aria-label="default input example">
                </div>

                <div class="row">
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio Costo..." aria-label="First name">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio Venta..." aria-label="Last name">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>