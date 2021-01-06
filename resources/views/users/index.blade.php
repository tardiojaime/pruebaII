<h3 class="text-center">lista de Usuarios</h3>
<div class="table-responsive">
    <table class="table table-sm table-hover" style="overflow: hidden;"  id="table-principal">
        <thead class="thead bg-transparent">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Avatar</th>
                <th>Rol</th>
                <th>Telefono</th>
                <th><a href="#" id="new_users"  class="btn-new btn-block"><i
                            class="fas fa-plus"></i></a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                <img src="{{asset('storage/'.$user->avatar)}}" alt="{{$user->avatar}}" width="50px" height="50px"
                            class="img-thumbnail">
                </td>
                <td>{{$user->rol}}</td>
                <td>{{$user->telefono}}</td>
                <td class="options">
                    <a href="#" class="btn-opciones"><i class="fas fa-plus"></i></a>
                    <div class="mas-opciones">
                        <li>
                            <a href="{{URL::action('UserController@show', $user->id)}}"
                                class="btn-enlaces view-user">
                                <i class="fas fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::action('UserController@edit', $user->id)}}" page="1"
                                class="btn-enlaces edit-user">
                                <i class="fas fa-pen-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" code="{{$user->id}}" user="{{$user->name}}" email ="{{$user->email}}"
                            class="btn-enlaces page delete-user">                            
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </li>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('users.delete')
<script src="{{asset('js/users/user.js')}}"></script>
<script src="{{asset('js/btn_enlaces.js')}}"></script>
