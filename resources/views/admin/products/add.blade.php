@extends('admin.master')

@section('title', 'Agregar Productos')

@section( 'breadcrumb')
 <li class="breadcrumb-item">
    <a href="{{url('/admin/products')}}" style="text-decoration:none"><i class="fa-solid fa-boxes-stacked"></i>Partidos</a>
 </li>
 <li class="breadcrumb-item">
    <a href="{{url('/admin/products/add')}}" style="text-decoration:none"><i class="fa-solid fa-plus"></i>Agregar Partidos</a>
 </li>
@endsection

@section('content')
 <div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fa-solid fa-plus"></i>Partidos</a></h2>
        </div>
        <div class="inside">
            {!! Form::open(['url' => '/admin/products/add', 'files' => true ])!!}
            <div class="row">
                <div class="col-md-6">
                    <label for="name" >Nombre del Estadio</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-keyboard"></i></span>
                        </div>
                    {!! Form::text('name',null, ['class' => 'form-control'])!!}
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="category">Equipo Local</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-keyboard"></i></span>
                        </div>
                        {!! Form::select('category', $cats, 0, ['class' => 'custom-select'])!!}
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="category">Equipo Visitante</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-keyboard"></i></span>
                        </div>
                        {!! Form::select('category', $cats, 0, ['class' => 'custom-select'])!!}
                    </div>
                </div>
                

            

                
            </div>

            <div class="row">
                <div class="col-md-3">
                    <label for="indiscount">Estado</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-money-bill"></i></i></span>
                        </div>
                        {!! Form::select('indiscount',['0' => 'Activo', '1' => 'Finalizado', '2' => 'Pendiente'],0, ['class' => 'custom-select'])!!}
                    </div>
                </div>
            </div>

            <div class="row mtop16">
                <div class="col-md-12">
                    <label for="content">Descripción</label>
                    {!! Form::textarea('content',null, ['class' => 'form-control', 'id' => 'editor'])!!}
                </div>
            </div>

            <div class="row mtop16">
                <div class="col-md-12">
                    {!! Form::submit('Guardar',['class' => 'btn btn-success'])!!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
     </div>
 </div>
@endsection