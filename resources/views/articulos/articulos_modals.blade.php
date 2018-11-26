<div class="modal fade" id="deleteArticuloModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Alerta de Eliminación</h4>
            </div>
            <div class="modal-body">
                <b>¿Esta seguro que desea borrar este registro?</b>
            </div>
            <div class="modal-footer">
                <a href="{{ route('articulos/destroy', ['id' => $articulo->id]) }}" type="button" class="btn btn-primary">Aceptar</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


