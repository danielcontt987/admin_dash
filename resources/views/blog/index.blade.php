@extends('adminlte::page')

@section('title', 'Listado de blogs')

@section('content_header')
    <h1>Listado de blogs</h1>
@stop

@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                  @can('crear-blog')
                    <a href="{{route('blogs.create')}}" class="btn btn-primary">Crear blog</a>
                   @endcan
                    <table class="table">
                        <thead>
                        <tr>
                            <div >
                                <th class="text-center" scope="col">#</th>
                                <th class="text-center" scope="col">Titulo</th>
                                <th class="text-center" scope="col">Contenido</th>
                                <th class="text-center" scope="col">Acciones</th>
                            </div>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog )
                            <tr>
                                <th class="text-center"  scope="row">{{$blog->id}}</th>
                                <td class="text-center">{{$blog->title}}</td>
                                <td class="text-center">{{$blog->content}}</td>
                                <td class="text-center">
                                    @can('editar-blog')
                                      <a href="{{route('blogs.edit', $blog->id)}}" class="btn btn-warning">Editar</a>
                                    @endcan
                                    @can('borrar-blog')
                                     {!! Form::open(['method' =>'DELETE', 'route' => ['blogs.destroy', $blog->id], 'style' => 'display:inline']) !!}
                                         {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                    @endcan
                                     {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    <div class="pagination justify-content">
                        {!! $blogs->links() !!}
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
