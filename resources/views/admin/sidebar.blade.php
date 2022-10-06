<div class="sidebar shadow">
   <div class="section-top">
    <div class="logo">
        <img src="{{url('static/imagenes/b.png')}}" class="img-fluid">
    </div>
    
    
    <div class="user">
        <span class="subtitle">Hola:</span>
        <div class="name"></div>
        {{ Auth::user()->nombre }} {{ Auth::user()->apellido}}
        <a href="{{ url('/logout')}}" data-toggle="tooltip" data-placement="top" title="Salir">
            <i class="fa-solid fa-right-from-bracket"></i></a>
    
    <div class="email">{{ Auth::user()->email}}</div>
    </div>
   </div> 
   <div class="main">
    <ul>
        <li>
            <a href="{{url('/admin')}}" style="text-decoration:none"><i class="fa-solid fa-house"></i>Inicio</a>
        </li>
        <li>
            <a href="{{url('/admin/users')}}" style="text-decoration:none"><i class="fa-solid fa-users"></i>Usuarios</a>
        </li>
        <li>
            <a href="{{url('/admin/categories/0')}}" style="text-decoration:none"><i class="fa-solid fa-folder-open"></i>Equipos</a>
        </li>
        <li>
            <a href="{{url('/admin/products')}}" style="text-decoration:none"><i class="fa-solid fa-boxes-stacked"></i>Partidos</a>
        </li>
    </ul>
   </div>
</div>