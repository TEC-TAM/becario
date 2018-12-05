@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Información del becario</h3>
                    <div class="btn-group pull-right">
                        {!! HTML::decode(link_to('schoolboys','<i class="glyphicon glyphicon-arrow-left"></i> Volver',['class' => 'btn btn-default btn-xs'],null )) !!}
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
                    <div class="list-group-item">
                        <div class="list-group-item-text">
                            @if($student->confirmed)
                                <span class="label labe-primary">Confirmado</span>
                            @else
                                <span class="label label-danger">Sin confirmar</span>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Calificación</h3>
                    <div class="btn-group pull-right">
                        <button class="btn btn-xs btn-default" data-toggle="modal"
                            href="#modal"> <i class="glyphicon glyphicon-modal-window"></i> Rúbicar de calicación</button>
                    </div>
                </div>
                <div class="list-group">
                    @if($student->rated)
                        <div class="list-group-item">
                            <p class="list-group-item-text">Resultado de evaluación</p>
                            <h4 class="list-group-item-heading">{!! $student->rate->service_rate !!}</h4>
                        </div>
                        <div class="list-group-item">
                            <p class="list-group-item-text">Reasignación</p>
                            <h4 class="list-group-item-heading">
                                @if($student->rate->reassigned)
                                    Si
                                @else
                                    No
                                @endif
                            </h4>
                        </div>
                        <div class="list-group-item">
                            <div class="text-center">
                                {!! link_to('schoolboys/'.$student->id.'/rate/edit','Editar calificación',['class'=>'btn btn-default']) !!}
                            </div>
                        </div>
                    @else
                        <div class="list-group-item">
                            <p class="list-group-item-text">Calificación</p>
                            <h4 class="list-group-item-heading text-center"><span class="label label-info">Pendiente</span></h4>
                        </div>
                        <div class="list-group-item">
                            <div class="text-center">
                                {!! link_to('schoolboys/'.$student->id.'/rate','Calificar',['class'=>'btn btn-default']) !!}
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p class="text-justify">
                        El proceso de evaluación es muy importante para el Departamento de Apoyos Educativos
                        por lo que se les invita a que la efectúen de una manera veraz, objetiva y oportuna
                        ya que no son válidas las evaluaciones tardías. Los criterios a evaluar son: asistencia
                        , iniciativa, cumplimiento de tareas, disposición y honestidad.
                        <br>
                        Un alumno de <strong>PREPARATORIA</strong> debe acumular al final del semestre un total de <strong>48 horas</strong>.
                        <br>
                        Un alumno de <strong>PROFESIONAL</strong> debe acumular al final del semestre un total de <strong>80 horas</strong>.
                    </p>
                    <p>
                        Se calificará de una manera general el servicio prestado por el alumno tomando en cuenta las siguientes consideraciones:
                        <ol class="text-justify">
                            <li>
                                Una evaluación <strong>excelente</strong> indica que el servicio de alumno
                                becario fue excelente en todos los aspectos y cumplió por lo menos con el 70% de sus horas
                            </li>
                            <li>
                                Una evaluación <strong>buena</strong> indica que tal vez no cumplió con todos los criterios calificados pero
                                que sin embargo es aceptablet el servicio que ofreció, dado que sí cumplió con los
                                aspectos que a su juicio considera más importantes y cumplió por lo menos con el 50% de sus horas.
                            </li>
                            <li>
                                Una evaluación <strong>mala</strong> indica que el alumno no cumplió en algunos de los criterios que a su juicio
                                considera más importantes y cumplió con menos del 50% de sus horas.
                            </li>
                            <li>
                                Una evaluación <strong>pésima</strong> indica que el alumno definitivamente no cumplió con ninguno de los puntos evaluados y no realizó su servicio becario.
                            </li>
                        </ol>
                        <br>
                        <p>
                            Enviar esta evaluación a más tardar el día  <strong>{!! $period->deadline_to_rate_students !!}</strong>
                            El personal que no entregue la evaluación del servicio de sus alumnos becarios
                            en la forma y tiempo establecidos <strong>NO</strong> se le asignará becarios el siguiente semestre.

                        </p>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection