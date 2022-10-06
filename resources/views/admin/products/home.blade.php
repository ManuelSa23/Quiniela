@extends('admin.master')

@section('title', 'Productos')

@section( 'breadcrumb')
 <li class="breadcrumb-item">
    <a href="{{url('/admin/products')}}" style="text-decoration:none"><i class="fa-solid fa-boxes-stacked"></i>Partidos</a>
 </li>
@endsection

@section('content')
 <div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fa-solid fa-boxes-stacked"></i>Partidos</a></h2>
        </div>
        <div class="inside">
            <div class="btns">
                <br>
                <a href="{{ url('/admin/products/add')}}" style="text-decoration:none" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Agregar Partidos</a>
            </div>
            <table class="table table-striped mtop16">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre estadio</td>
                        <td>Equipo Local</td>
                        <td>Equipo Visitante</td>
                        <td>Precio</td>
                        <td></td>
                    </tr>
                </thead>
            <tbody>
                @foreach($products as $p)
                <tr>
                    <td width="60">{{ $p->id}}</td>
                    <td>{{ $p->name}}</td>
                    <td>{{ $p->cat->name}}</td>
                    <td>{{ $p->price}}</td>
                    <td>
                        <div class="opts">
                            <a href="{{ url('/admin/products/'.$p->id.'/edit')}}" style="text-decoration:none" data-toggle="tooltip" data-placement="top" title="Editar">
                                <i class="fa-solid fa-pen-to-square"></i>  
                            </a>
                            <a href="{{ url('/admin/products/'.$p->id.'/delete')}}" style="text-decoration:none" data-toggle="tooltip" data-placement="top" title="Eliminar">
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