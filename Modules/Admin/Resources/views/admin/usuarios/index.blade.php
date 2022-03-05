@extends('adminlte::page')

@section('title', 'Listado de usuarios')

@section('content_header')
    <h1>Listado de usuarios</h1>
@stop

@section('content')


<a href="{{route('usuarios.create')}}" class="btn btn-primary">Crear Usuario</a>
<table class="table">
    <thead>
      <tr>
        <div >
            <th class="text-center" scope="col">#</th>
            <th class="text-center" scope="col">Nombre</th>
            <th class="text-center" scope="col">Correo</th>
            <th class="text-center" scope="col">Rol</th>
            <th class="text-center" scope="col">Acciones</th>
        </div>
      </tr>
    </thead>
    <tbody>
        @foreach ( $users as $user )
        <tr>
            <th class="text-center"  scope="row">{{$user->id}}</th>
            <td class="text-center">{{$user->name}}</td>
            <td class="text-center">{{$user->email}}</td>
            <td class="text-center">
                <!--getRolName es de la libreria de spatie-->
                @if (!empty($user->getRoleNames()))
                   @foreach ($user->getRoleNames() as $rol )
                       <h6 class="btn btn-success btn-xs">{{$rol}}</h6>
                   @endforeach
                @endif
            </td>
            <td class="text-center">
                <a href="{{route('usuarios.edit', $user->id)}}" class="btn btn-warning">Editar</a>
                 {!! Form::open(['method' =>'DELETE', 'route' => ['usuarios.destroy', $user->id], 'style' => 'display:inline']) !!}
                     {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                 {!! Form::close() !!}
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  <div class="pagination justify-content">
      {!! $users->links() !!}
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
