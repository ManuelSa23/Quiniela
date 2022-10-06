@extends('admin.master')

@section('title', 'Categorias')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ url('/admin/categories/0')}}"><i class="fa-solid fa-folder-open"></i>Equipo</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title"><i class="fa-solid fa-plus"></i>Editar Equipo</a></h2>
                </div>
                <div class="inside">
                    {!! Form::open(['url' =>'/admin/category/'.$cats->id.'/edit'])!!}
                    
                        <label for="name" >Nombre Equipo</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-keyboard"></i></span>
                            </div>
                        {!! Form::text('name', $cats->name, ['class' => 'form-control'])!!}
                        </div>
                        
                            <label for="module" class="mtop16" >Grupo</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-keyboard"></i></span>
                                </div>
                                {!! Form::select('module', getModulesArray(), $cats->module, ['class' => 'custom-select'])!!}
                            </div>

                            <label for="icon" >Icono</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-keyboard"></i></span>
                            </div>
                        {!! Form::text('icon', $cats->icono, ['class' => 'form-control'])!!}
                        </div>
                        
                    {!! Form::submit('Guardar', ['class' => 'btn btn-success mtop16'])!!}
                    {!! Form::close()!!}
                </div>
             </div>
        </div>

    </div>
</div>
@endsection