@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="page-header">Importar archivo Excell</h1>
            @include('partials.errors')
            {!! Form::open(array('url' => 'imports','files' => 'true')) !!}
            <div class="form-group">
                {!! Form::label('file_url','Ruta del archivo Excel:')!!}
                {!! Form::file('file_url') !!}
            </div>
            <div class="form-group">
                {!! Form::label('description','Description del archivo:')!!}
                {!! Form::input('text','description',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Cargar',['class' => 'btn btn-success form-control']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection