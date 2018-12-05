@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Información del alumno</h3>
                    <div class="btn-group pull-right">
                        {!! HTML::decode(link_to('students','<i class="glyphicon glyphicon-arrow-left"></i> Volver', ['class' => 'btn btn-xs btn-default'],null )) !!}
                    </div>
                </div>
                <div class="list-group">
                    <div class="list-group-item">
                        <p class="list-group-item-text">Nombre</p>
                        <h4 class="list-group-item-heading">{!! $student->name !!} {!! $student->last_name !!} {!! $student->middle_name !!}</h4>
                    </div>
                    <div class="list-group-item">
                        <p class="list-group-item-text">Matrícula</p>
                        <h4 class="list-group-item-heading">{!! $student->itesm_id !!}</h4>
                    </div>
                    <div class="list-group-item">
                        <p class="list-group-item-text">Carrera</p>
                        <h4 class="list-group-item-heading">{!! $student->career !!}</h4>
                    </div>
                    <div class="list-group-item">
                        <p class="list-group-item-text">Semestre</p>
                        <h4 class="list-group-item-heading">{!! $student->semester !!}</h4>
                    </div>
                    @if(!$student->delivered)
                        <div class="list-group-item">
                            <p class="list-group-item-text">Hoja de Servicio</p>
                            <h4 class="list-group-item-heading"> <span class="label label-warning">Sin entregar</span></h4>
                        </div>
                    @else
                        <div class="list-group-item">
                            <p class="list-group-item-text">Hoja de Servicio</p>
                            <h4 class="list-group-item-heading">Entregada</h4>
                        </div>
                    @endif
                    <div class="list-group-item">
                        <div class="list-group-item-text">
                            @if($student->confirmed)
                                <span class="label labe-primary">Confirmado</span>
                            @else
                                <span class="label label-danger">Sin confirmar</span>
                            @endif
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="text-center">
                            {!! link_to('students/'.$student->id.'/edit','Editar',['class'=>'btn btn-default']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Asignado a </h3>
                </div>
                <div class="list-group">
                    <div class="list-group-item">
                        <p class="list-group-item-text">Nombre</p>
                        <h4 class="list-group-item-heading">{!! $student->user->name !!} {!! $student->user->last_name !!} {!! $student->user->middle_name !!}</h4>
                    </div>
                    <div class="list-group-item">
                        <p class="list-group-item-text">Email</p>
                        <h4 class="list-group-item-heading">{!! $student->user->email !!}</h4>
                    </div>
                    <div class="list-group-item">
                        <p class="list-group-item-text">Área</p>
                        <h4 class="list-group-item-heading"><span class="label label-success">{!! $student->user->work_area !!}</span></h4>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Registro de calificación</h3>
                </div>
                <div class="list-group">
                    @if(!$student->rated)
                        <div class="list-group-item">
                            <p class="list-group-item-text">Calificación</p>
                            <h4 class="list-group-item-heading"> <span class="label label-info">Pendiente</span></h4>
                        </div>
                    @else
                        <div class="list-group-item">
                            <p class="list-group-item-text">Calificación</p>
                            <h4 class="list-group-item-heading">Excelente</h4>
                        </div>
                        <div class="list-group-item">
                            <p class="list-group-item-text">Deseo a este alumno como becario</p>
                            <h4 class="list-group-item-heading">Si</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
