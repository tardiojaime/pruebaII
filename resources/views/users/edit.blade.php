<div class="card">
    <div class="card-body">
        <form action="Users/{{$user->id}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row" style="padding:0px 25px;">
                <div class="col-md-6 form-group input-group-sm ">
                    <label class="" for="name">Nombre</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Usuer name"
                        required>
                </div>
                <div class="col-md-6 form-group input-group-sm ">
                    <label class="" for="email">Email</label>
                    <input type="email" name="email" value="{{$user->email}}" class=" form-control" placeholder="Email"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="avatar">Avatar</label>
                    <img src="{{asset('storage/'.$user->avatar)}}" alt="{{$user->name}}" height="150px"
                        class="img-thumbnail img-user-show">
                    <input type="file" class="form-control-file" name="avatar">
                </div>
                <div class="form-group col-md-6">
                    <label for="background">Fondo</label>
                    <img src="{{asset('storage/'.$user->fondo)}}" alt="{{$user->name}}" height="150px"
                        class="img-thumbnail img-user-show">
                    <input type="file" class="form-control-file" name="background">
                </div>
                <div class="col-md-6 form-group input-group-sm ">
                    <label class="" for="email">Contraseña</label>
                    <input type="password" name="password" value="{{$user->password}}" class=" form-control"
                        placeholder="Contraseña" required>
                </div>
                @if(auth()->user()->rol == 'admin')
                <div class="form-group col-md-6 input-group-sm">
                    <label class="" for="rol">Rol</label>
                    <select name="rol" class="form-control">
                        @if($user->rol == "admin")
                        <option selected value="admin">Administrador</option>
                        <option value="user">Usuario</option>
                        @else
                        <option value="admin">Administrador</option>
                        <option selected value="user">Usuario</option>
                        @endif
                    </select>
                </div>
                @endif
                <div class="form-group col-md-6 input-group-sm">
                    <label for="telefono">Telefono</label>
                    <input type="number" min="60000000" class="form-control" name="telefono" value="{{$user->telefono}}"
                        required>
                </div>
                <div class="form-group col-md-6 input-group-sm">
                    <label for="config">Configuracion</label>
                    <select name="config" id="" class="custom-select">
                        @foreach($config as $conf)

                        @if($user->config == '')
                        <option value="{{$conf->id}}">{{$conf->nombre}}</option>
                        @endif
                        @if($user->config == $conf->id)
                        <option selected value="{{$conf->id}}">{{$conf->nombre}}</option>
                        @else
                        <option value="{{$conf->id}}">{{$conf->nombre}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <button type="submit" id="user-submit-edit" class="btn btn-success btn-sm float-left"><i
                            class="fas fa-save"></i>
                        Guardar</button>
                    <button type="button" class="btn btn-dark btn-sm float-right"><i class="far fa-trash-alt"></i>
                        Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{asset('js/users/user.js')}}"></script>