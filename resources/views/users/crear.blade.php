@extends('adminlte::page')

@section('title', 'Crear usuario')

@section('content_header')
    <h1>Creación de usuarios</h1>
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

                   {!! Form::open(array('route' => 'users.store', 'method' => 'POST')) !!}
                     <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12">
                             <div class="form-group">
                                 <label for="name">Nombre</label>
                                 {!! Form::text('name', null, array('class' => 'form-control')) !!}
                             </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                {!! Form::text('email', null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                {!! Form::text('password', array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="confirm-password">Confirmar Contraseña</label>
                                {!! Form::text('confirm-password', array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">Roles</label>
                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
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
