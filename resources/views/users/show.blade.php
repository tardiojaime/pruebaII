<div class="card border-primary">
    <div class="card-body">
        <h3 class="titulo-venta text-center">Informacion del Usuario </h3>
        <div class="card mb-1">
        <div class="p-2 db-highlight"><a href="{{URL::action('UserController@edit', $user->id)}}" id="edit-user-only" class="btn btn-sm btn-success"><i class="fas fa-user-cog"></i></a>
            <div class="card body">
                <div class="row">
                    <div class="col-md-6 form-group input-group-sm ">
                        <label class="" for="name">Nombre</label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control">
                    </div>
                    <div class="col-md-6 form-group input-group-sm">
                        <label class="ver-ventas" for="">Email </label>
                        <input type="text" disabled value="{{$user->email}}" class="form-control">
                    </div>
                    <div class="col-md-6 form-group input-group-sm">
                        <label class="ver-ventas" for="">Avatar</label>
                        <img src="{{asset('storage/'.$user->avatar)}}" alt="{{$user->name}}" height="150px"
                            class="img-thumbnail img-user-show">
                    </div>
                    <div class="col-md-6 form-group input-group-sm">
                        <label class="ver-ventas" for="">Fondo</label>
                        <img src="{{asset('storage/'.$user->fondo)}}" alt="{{$user->name}}" height="150px"
                            class="img-thumbnail img-user-show">
                    </div>
<!--                     @if(auth()->user()->rol == 'admin')
                    <div class="col-md-6 form-group input-group-sm">
                        <label class="ver-ventas" for="">Rol</label>
                        <input type="text" disabled value="{{$user->rol}}" class="form-control">
                    </div>
                    @endif -->
                    <div class="col-md-6 form-group input-group-sm">
                        <label class="ver-ventas" for="">Telefono</label>
                        <input type="text" disabled value="{{$user->telefono}}" class="form-control">
                    </div>
                    <div class="col-md-6 form-group input-group-sm">
                        <label class="ver-ventas" for="">Configuracion</label>
                        <input type="text" disabled value="{{$user->nombre}}" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="{{asset('js/users/user.js')}}"></script>