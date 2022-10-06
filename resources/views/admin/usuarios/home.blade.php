@extends('admin.master')

@section('title', 'Dashboard')

@section( 'breadcrumb')
 <li class="breadcrumb-item">
    <a href="{{url('/admin/users')}}" style="text-decoration:none"><i class="fa-solid fa-users"></i>Usuarios</a>
 </li>
@endsection

@section( 'content')
 <div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fa-solid fa-users"></i>Usuarios</a></h2>
        </div>
        <div class="inside">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Email</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{ $user->id}}</td>
                            <td>{{ $user->nombre}}</td>
                            <td>{{ $user->apellido}}</td>
                            <td>{{ $user->email}}</td>
                            <td>
                                <div class="opts">
                                <a href="{{ url('/admin/user/'.$user->id.'/edit')}}" style="text-decoration:none" data-toggle="tooltip" data-placement="top" title="Editar">
                                    <i class="fa-solid fa-pen-to-square"></i>  
                                </a>
                                <a href="{{ url('/admin/user/'.$user->id.'/delete')}}" style="text-decoration:none" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                    <i class="fa-solid fa-trash"></i>  
                                </a>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
     </div>
 </div>
@endsection

