@extends('app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-info">
                <div style="padding: 10px">
                    <h1 class="text-center">Sistema de servicio becario</h1>
                    @if(Auth::user()->type)
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Semestre: <strong>{!! $period->semester !!}</strong></p>
                                <p>Fecha límite para calificar becarios: <strong>{!! $period->deadline_to_rate_students !!}</strong></p>
                            </div>
                            <div class="col-sm-6">
                                <p>Fecha límite para entrega de hoja de servicio becario:<strong>{!! $period->deadline_to_hand_in_file !!}</strong> </p>
                                <p>Fecha límite para entrega para calificar servicio becario:<strong>{!! $period->deadline_to_rate_students !!}</strong> </p>
                            </div>
                        </div>

                        <p>Alumnos calificados: <span class="label label-default">{!! $rs !!}</span> - Alumnos sin calificar: <span class="label label-default">{!! $urs !!}</span> </p>

                        {!! HTML::decode(link_to('students/rated/download','<i class="glyphicon glyphicon-download"></i> Reporte de alumnos calificados',['class'=>'btn btn-default btn-xs'],null )) !!}
                        {!! HTML::decode(link_to('students/unrated/download','<i class="glyphicon glyphicon-download"></i> Reporte de alumnos no calificados',['class'=>'btn btn-default btn-xs'],null )) !!}
                    @else
                        <p>Semestre: <strong>{!! $period->semester !!}</strong></p>
                        <p>Fecha límite para calificar becarios: <strong>{!! $period->deadline_to_rate_students !!}</strong></p>
                        <p>Alumnos calificados: <span class="label label-default">{!! $rs !!}</span> - Alumnos sin calificados: <span class="label label-default">{!! $urs !!}</span> </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->type)
    <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
            <div class="panel panel-primary bootcards-summary">
                <div class="panel-heading">
                    <h3 class="panel-title">Resumen</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 col-sm-4">
                            <div class="bootcards-summary-item">
                                <i class="glyphicon glyphicon-education"></i>
                                <h4>Estudiantes <span class="label label-info">{!! $rs+$urs !!}</span></h4>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <div class="bootcards-summary-item">
                                <i class="glyphicon glyphicon-tower"></i>
                                <h4>Profesores <span class="label label-info">{!! $tc !!}</span></h4>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <div class="bootcards-summary-item" >
                                <i class="glyphicon glyphicon-file"></i>
                                <h4>Archivos importados<span class="label label-info">{!! $fl !!}</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection