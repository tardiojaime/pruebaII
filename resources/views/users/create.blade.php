<div class="card">
    <div class="card-body">
        <form action="Users" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row" style="padding:0px 25px;">
                <div class="col-md-6 form-group input-group-sm ">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" class="form-control" placeholder="Usuer name" required>
                </div>
                <div class="col-md-6 form-group input-group-sm ">
                    <label for="email">Email</label>
                    <input type="email" name="email" " class=" form-control" placeholder="Email" required>
                </div>
                <div class="col-md-6 form-group input-group-sm ">
                    <label for="email">Contraseña</label>
                    <input type="password" name="password" " class=" form-control" placeholder="Contraseña" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="avatar">Avatar</label>
                    <input type="file" class="form-control-file" name="avatar">
                </div>
                <div class="form-group col-md-6">
                    <label for="background">Fondo</label>
                    <input type="file" class="form-control-file" name="background">
                </div>
                <div class="form-group col-md-6 input-group-sm">
                    <label class="" for="rol">Rol</label>
                    <select name="rol" class="form-control">
                        <option value="admin">Administrador</option>
                        <option value="user">Usuario</option>
                    </select>
                </div>
                <div class="form-group col-md-6 input-group-sm">
                    <label for="telefono">Telefono</label>
                    <input type="number" min="60000000" class="form-control" name="telefono" required>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" id="user-submit" class="btn btn-success btn-sm float-left"><i
                            class="fas fa-save"></i>
                        Guardar</button>
                    <button type="button" class="btn btn-dark btn-sm float-right" data-dismiss="modal"><i
                            class="far fa-trash-alt"></i> Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{asset('js/users/index.js')}}"></script>