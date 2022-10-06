@extends('connect.master')

@section('title', 'Registrarse')

@section('content')

<div class="box box_registrar shadow">
 <div class="header">
    <a href="{{url('/')}}">
        <img src="{{url('/static/imagenes/b.png')}}">
    </a>
 </div>

<div class="inside">
    {!! Form::open(['url' => '/registra']) !!}
    
    <label for="nombre">Nombre</label>
 <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
        </div>
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required']) !!}
 </div>
 <label for="apellido" class="mtop16">Apellido</label>
 <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa-regular fa-user"></i></div>
        </div>
    {!! Form::text('apellido', null, ['class' => 'form-control', 'required']) !!}
 </div>
<label for="email" class="mtop16">Correo electrónico</label>
 <div class="input-group ">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
        </div>
    {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
 </div>

<label for="password" class="mtop16">Password</label>
 <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa-solid fa-unlock"></i></div>
        </div>
    {!! Form::password('password',  ['class' => 'form-control', 'required']) !!}
 </div>
 <label for="cpassword" class="mtop16">Confirmar Password</label>
 <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
        </div>
    {!! Form::password('cpassword',  ['class' => 'form-control', 'required']) !!}
 </div>
    {!! Form::submit('Registrarse',['class' => 'btn btn-success mtop16'])!!}
    {!! Form::close() !!}

    @if(Session::has('message'))
      <div class="container">
         <div class="alert alert-{{ Session::get('typealert') }}" style="display: none;">
            {{ Session::get('message')}}
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>   
            @endif
            <script>
                $('.alert').slideDown();
                setTimeout(function(){ $('.alert').slideUp(); },10000);
            </script>
         </div>
      </div>
        
    @endif

       <div class="footer_registra mtop16">
          <a href="{{url('/login')}}">Ingresar</a>
       </div>
</div>

</div> 



@stop