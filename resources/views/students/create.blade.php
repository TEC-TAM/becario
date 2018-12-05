@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Ingresar estudiante</h3>
                    <div class="btn-group pull-right">
                        {!! HTML::decode(link_to('students','<i class="glyphicon glyphicon-arrow-left"></i> Volver', ['class' => 'btn btn-xs btn-default'],null )) !!}
                    </div>
                </div>
                <div class="modal-body">
                    @include('partials.errors')
                    {!! Form::open(array('url' => 'students','class'=>'form-horizontal')) !!}
                    {!! Form::hidden('confirmed', 0) !!}
                    {!! Form::hidden('rated', 0) !!}
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Nombre</label>
                            <div class="col-xs-9">
                                {!! Form::input('text','name',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Ap. Paterno</label>
                            <div class="col-xs-9">
                                {!! Form::input('text','last_name',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Ap. Materno</label>
                            <div class="col-xs-9">
                                {!! Form::input('text','middle_name',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Matrícula</label>
                            <div class="col-xs-9">
                                {!! Form::input('text','itesm_id',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Carrera</label>
                            <div class="col-xs-3">
                                {!! Form::input('text','career',null,['class' => 'form-control']) !!}
                            </div>
                            <label class="col-xs-3 control-label">Beca %</label>
                            <div class="col-xs-3">
                                {!! Form::input('text','grant',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Semestre</label>
                            <div class="col-xs-3">
                                {!! Form::input('text','semester',null,['class' => 'form-control']) !!}
                            </div>
                            <label class="col-xs-3 control-label">Asignar a</label>
                            <div class="col-xs-3">
                                {!! Form::input('text','assigned_to',null,['class' => 'form-control','id'=>'assigned_to','autocomplete' => 'off']) !!}
                            </div>
                        </div>
                        {!! Form::submit('Registrar',['class' => 'btn btn-primary  btn-block form-control']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection