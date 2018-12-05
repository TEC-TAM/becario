@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Editar Semestre</h3>
                    <div class="btn-group pull-right">
                        {!! HTML::decode(link_to('home','<i class="glyphicon glyphicon-arrow-left"></i> Volver', ['class' => 'btn btn-xs btn-default'],null )) !!}
                    </div>
                </div>
                <div class="modal-body">
                    @include('partials.errors')
                    {!! Form::model($period,['method' => 'PUT','action' => ['PeriodController@update',$period->id]]) !!}
                    <div class="form-group">
                        {!! Form::label('semester','Periodo del semestres') !!}
                        {!! Form::text('semester',null,['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('deadline_to_finish_service','Fecha límite para terminar servicio becario') !!}
                        {!! Form::text('deadline_to_finish_service',null,['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('deadline_to_rate_students','Fecha límite para calificar becarios') !!}
                        {!! Form::text('deadline_to_rate_students',null,['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('deadline_to_hand_in_file','Fecha límite para entregar hoja de servicio becario') !!}
                        {!! Form::text('deadline_to_hand_in_file',null,['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('Actualizar',['class' => 'btn btn-primary  btn-block form-control']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection