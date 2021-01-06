<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    id="modal-delete-u">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="">
                <button type="button" class="close item-close" data-dismiss="modal" aria-label="Close">
                    <span class="item-close" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container">
                <h3 class="text-center">Esta seguro de eliminar a ..?</h3>
                <div>
                    <p class="text-center">
                        Usuario: <span id="user-modal"></span>
                    </p>
                </div>
                <div>
                    <p class="text-center">
                        Email: <span id="email-modal"></span>
                    </p>
                </div>
            </div>
            <div class="form-group col-md-12">
                <form id="form-dele" action="" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" id="delete-user" class="btn btn-success btn-sm float-left"><i
                            class="fas fa-save"></i>
                        Eliminar</button>
                    <button type="button" class="btn btn-dark btn-sm float-right" data-dismiss="modal"><i
                            class="far fa-trash-alt"></i> Cancelar</button>
                </form>

            </div>
        </div>
    </div>
</div>