@extends('adminlte::page')

@section('title', 'Editar usuario')

@section('content_header')
    <h1>Editar de usuario</h1>
@stop

@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                   @if ($errors->any())
                       <div class="alert alert-danger alert-dismissible fade show">
                           <strong>!Revisa los campos</strong>
                           @foreach ($errors->all() as $error )
                               <span class="badge badge-danger">{{$error}}</span>
                           @endforeach
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                   @endif

                   {!! Form::model($blog,['method' => 'PUT', 'route' =>['blogs.update', $blog->id]]) !!}
                     <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12">
                             <div class="form-group">
                                 <label for="title">Titulo</label>
                                 {!! Form::text('title', null, array('class' => 'form-control')) !!}
                             </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="content">Contenido</label>
                                {!! Form::text('content', null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                     </div>

                   {!! Form::close() !!}
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
