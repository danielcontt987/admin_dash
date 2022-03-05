@extends('adminlte::page')

@section('title', 'Listado de roles')

@section('content_header')
    <h1>Listado de roles</h1>
@stop

@section('content')

@can('crear-rol')
<a href="{{route('roles.create')}}" class="btn btn-primary">Crear rol</a>
@endcan

<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                                <th class="text-center" scope="col">#</th>
                                <th class="text-center" scope="col">Rol</th>
                                <th class="text-center" scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ( $roles as $rol )
                            <tr>
                                <th class="text-center"  scope="row">{{$rol->id}}</th>
                                <td class="text-center">{{$rol->name}}</td>
                                </td>
                                <td class="text-center">
                                    @can('editar-rol')
                                    <a href="{{route('roles.edit', $rol->id)}}" class="btn btn-warning">Editar</a>
                                    @endcan
                                    @can('borrar-rol')
                                    {!! Form::open(['method' =>'DELETE', 'route' => ['roles.destroy', $rol->id], 'style' => 'display:inline']) !!}
                                    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    @endcan

                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <div class="pagination justify-content">
                          {!! $roles->links() !!}
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
