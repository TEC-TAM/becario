@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Ingresar nuevo maestro</h3>
                    <div class="btn-group pull-right">
                        {!! HTML::decode(link_to('teachers','<i class="glyphicon glyphicon-arrow-left"></i> Volver', ['class' => 'btn btn-xs btn-default'],null )) !!}
                    </div>
                </div>
                <div class="modal-body">
                    @include('partials.errors')
                    {!! Form::open(array('url' => 'teachers','class'=>'form-horizontal')) !!}
                    {!! Form::hidden('type', 0) !!}
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Nombre</label>
                            <div class="col-xs-9">
                                {!! Form::input('text','name',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Apellido paterno</label>
                            <div class="col-xs-9">
                                {!! Form::input('text','last_name',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Apellido Materno</label>
                            <div class="col-xs-9">
                                {!! Form::input('text','middle_name',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Nómina</label>
                            <div class="col-xs-9">
                                {!! Form::input('text','itesm_id',null,['class' => 'form-control','placeholder' => 'L00123456']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Área de trabajo</label>
                            <div class="col-xs-9">
                                {!! Form::input('text','work_area',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        {!! Form::submit('Registrar',['class' => 'btn btn-primary  btn-block form-control']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection