@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            @include('partials.errors')
            {!! Form::open(['url' => 'teachers/upload','files' => true]) !!}
            <div class="panel panel-primary bootcards-file">
                <div class="panel-heading">
                    <h3 class="panel-title">Bulk - Maestros</h3>
                </div>
                <div class="list-group">
                    <div class="list-group-item">
                        <a href="#">
                            <i class="glyphicon glyphicon-file"></i>
                        </a>
                        <h4 class="list-group-item-heading">
                            Cargar archivo excel con registros de maestros
                        </h4>
                        <br>
                        <br>
                    </div>
                    <div class="list-group-item">
                        <div class="list-group-item-text">
                            <strong>Archivo</strong>
                            {!! Form::file('file_url', ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="list-group-item-text">
                            <strong>Descripción</strong>
                            {!! Form::text('description', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-upload"></i>
                                Upload
                            </button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection