@extends('adminlte::page')

@section('title', 'Principal')

@section('content_header')
    <h1 class="text-center">Panel de control</h1>
@stop

@section('content')
<div class="container-fluid">

    <div class="row">
    <div class="col-lg-3 col-6">

    <div class="small-box bg-info">
    <div class="inner">
    <h3>
        @php
          use App\Models\User;
          $countUsers = User::count();
        @endphp
        {{$countUsers}}
    </h3>


    <p>Usuarios</p>
    </div>
    <div class="icon">
    <i class="fas fa-users"></i>
    </div>
    <a href="/admin/usuarios" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-success">
    <div class="inner">
    <h3>
        @php
        use Spatie\Permission\Models\Role;
        $countR = Role::count();
    @endphp
    {{$countR}}
    </h3>
    <p>Roles</p>
    </div>
    <div class="icon">
    <i class="fas fa-key"></i>
    </div>
    <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-warning">
    <div class="inner">
    <h3>
        @php
            use Spatie\Permission\Models\Permission;
            $countP = Permission::count();
        @endphp
        {{$countP}}
    </h3>
    <p>Permisos</p>
    </div>
    <div class="icon">
    <i class="fas fa-lock"></i>
    </div>
    <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-danger">
    <div class="inner">
    <h3>
        @php
        use App\Models\Blog;
        $countBlogs = Blog::count();
      @endphp
      {{$countBlogs}}
    </h3>
    <p>Blog</p>
    </div>
    <div class="icon">
    <i class="fas fa-blog"></i>
    </div>
    <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    </div>



@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css">
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/6.0.1/esm/ionicons.min.js" integrity="sha512-EmbXlzmS4lTfNxBz7xWacOcWYBw42KAzHTbtuVQvCPrR+fTeHHMB2dnxKqxhwqSqrK8foPW/LZOnHof4DCDHMw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script> console.log('Hi!'); </script>
@stop
