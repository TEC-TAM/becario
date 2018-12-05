@extends('app')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2"><img class="img-responsive" src="{{asset('/images/grupal-min.jpg')}}" alt=""/></div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="page-header text-center" style="margin-top:-25px;">
                <h1>Apoyos Educativos <br/><small>Campus Tampico</small></h1>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center">ALUMNOS ACTUALES</h3>
                    <br/>
                    <p class="text-justify">
                        El Tecnológico de Monterrey, consciente de que la educación es lo más importante para ti y tu familia,
                        ofrece diferentes programas de apoyo para que cumplas tu objetivo de concluir tus estudios en el Campus Tampico.
                        <br/>
                        Si cuentas con algún tipo de apoyo, es importante que tomes en cuenta la siguiente información:
                    </p>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="text-center">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#fellowservice">SERVICIO BECARIO</button>
                            </div>
                            <!-- Modal -->
                            <div id="fellowservice" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Servicio becario</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-justify">
                                                De acuerdo con el Reglamento Becas y Apoyos Educativos, el Tecnológico de Monterrey establece que todos aquellos alumnos que poseen Beca o Beca-Crédito Educativo Tec deberán realizar actividades de apoyo al instituto bajo el término de
                                                <b>Servicio Becario</b>.
                                            </p>
                                            <ul>
                                                <li>Un alumno de <b>PREPARATORIA</b> debe acumular al final del semestre un total de <b>48 horas</b>.</li>
                                                <li>Un alumno de <b>PROFESIONAL</b> debe acumular al final del semestre un total de <b>80 horas</b>.</li>
                                                <li>La fecha límite para completar las horas de servicio becario es el <b>10 de Mayo del 2018</b></li>
                                                <li>Aquellos alumnos que cuentan solamente con el apoyo de un crédito educativo, NO realizan servicio becario.</li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end modal-->
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#endorsementofscholarship">REFRENDO DE BECA</button>
                            </div>
                            <!-- Modal -->
                            <div id="endorsementofscholarship" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Refrendo de beca</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-justify">
                                               Al final de cada semestre se hace una evaluación a todos los alumnos becados para asegurar que cumplan con el reglamento de becas. Los requisitos generales que deberá cumplir el alumno para conservar la beca y/o apoyo educativo son:
                                            </p>
                                            <ul>
                                                <li>Mantener calificaciones con el promedio mínimo establecido en la beca o apoyo educativo.
                                                    <ul>
                                                        <li>Beca Socioeconómica: 85 de promedio.</li>
                                                        <li>Beca Talento Académico: 85 de promedio.</li>
                                                        <li>Beca Líderes del Mañana: 85 de promedio.</li>
                                                        <li>Beca Talento Deportivo, Cultural o Liderazgo: 80 de promedio.</li>
                                                    </ul>
                                                </li>
                                                <li>Aprobar todas las materias que cursó en el semestre que termina.</li>
                                                <li>Realizar satisfactoriamente, a juicio del Departamento de Becas y Apoyos Educativos, su servicio becario.</li>
                                                <li>Cursar lo correspondiente a la carga académica completa dependiendo del nivel de estudios.</li>
                                                <li>Entrega de formato de servicio becario en la fecha establecida por el departamento de servicios educativos firmado por el responsable y alumno.</li>
                                                <li>Realizar en tiempo la formalización de su Crédito Educativo Tec (sólo para alumnos de profesional).</li>
                                            </ul>
                                            <p>La ausencia de cualquiera de los requisitos de refrendo será motivo de <b>CONDICIONAMIENTO, REDUCCIÓN O CANCELACIÓN</b> de la Beca Tec de acuerdo con la siguiente tabla:</p>
                                            <table class="table">
                                                <tr style="background: #428bca;color: white;">
                                                    <th>Condición</th>
                                                    <th>Regular</th>
                                                    <th>Condicionado</th>
                                                    <th>Reducción</th>
                                                    <th>Cancelación</th>
                                                </tr>
                                                <tr>
                                                    <td><b>Ninguna falta</b></td>
                                                    <td>Regular</td>
                                                    <td>Regular</td>
                                                    <td>Regular</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Una falta</b></td>
                                                    <td>Condicionado</td>
                                                    <td>Reducción</td>
                                                    <td>Cancelación</td>
                                                    <td>Cancelación</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Dos faltas</b></td>
                                                    <td>Reducción</td>
                                                    <td>Cancelación</td>
                                                    <td>Cancelación</td>
                                                    <td>Cancelación</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Tres faltas</b></td>
                                                    <td>Cancelación</td>
                                                    <td>Cancelación</td>
                                                    <td>Cancelación</td>
                                                    <td>Cancelación</td>
                                                </tr>
                                            </table>
                                            <h5>ESTATUS DE BECA</h5>
                                            <ol>
                                                <li><b>Regular: </b> Cuando el alumno cumple satisfactoriamente con los requisitos establecidos para la conservación del programa de becas.</li>
                                                <li><b>Condicionado: </b>Es llamada la atención al estudiante. El alumno contunúa con sy beca.</li>
                                                <li><b>Reducción: </b>El alumno ha reincidido en incumplimiento, por lo quue se reduce su beca en un 10%. El alumno puede solicitar a través de una carta dirigida al comité al aumentar en 10% el apoyo educativo para no afectar su economía. Esta solicitud requiere autorización del Comité de Becas y Apoyos Educativos.</li>
                                                <li><b>Cancelación: </b> Es interrupción definitiva del apoyo, por bajo desempeño académico, habiendo pasado por los estatus anteriormente descritos.</li>
                                            </ol>
                                            <p><strong>*Reglamento de refrendo para alumnos que ingresaron a partir de Agosto del 2016, generaciones previas aplica el reglamento anterior.
                                                </strong></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#educationalcredit">CONTRATO DE CRÉDITO </button>
                            </div>
                            <!-- Modal -->
                            <div id="educationalcredit" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Contrato de crédito educativo Tec</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-justify">
                                                El Programa de Crédito Educativo Tec - Profesional ofrece una opción de financiamiento a tus estudios con las siguientes características:
                                            </p>
                                            <ul>
                                                <li>Tasa fija anual de 8.5%, durante toda la vida del crédito.</li>
                                                <li>Plazo de dos veces el periodo de estudio con crédito, sin exceder 9 años.</li>
                                                <li>Pago fijo de amortización de crédito durante la etapa de estudio. El monto del pago fijo depende del año en el que ingresó el alumno. </li>
                                            </ul>
                                            <br/>
                                            <p class="text-justify">
                                                Todo alumno que cuenta con un crédito educativo:
                                            </p>
                                            <br/>
                                            <ul>
                                                <li>El beneficiado se compromete a entregar semestralmente los anexos
                                                    del Contrato de Crédito en las fechas comunicadas por el
                                                    departamento de Becas y Apoyos Educativos.
                                                </li>
                                                <li>
                                                    El incumplimiento de las obligaciones anteriores tendrá como consecuencia cancelación del apoyo otorgado.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- -->
                        <div class="col-md-3">
                            <div class="text-center">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#creditrequest">SOLICITUD DE BECA</button>
                            </div>
                            <!-- Modal -->
                            <div id="creditrequest" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Solicitud de beca</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h3 class="text-heading">
                                                SOLICITAR APOYO POR PRIMERA VEZ O RECONSIDERACIONES
                                            </h3>
                                            <div class="text-justify">
                                                <ul>
                                                    <li>
                                                        Realizar su solicitud de estudio socioeconómico en el portal: <a
                                                                href="http://solicitud.itesm.mx/apoyofinanciero">apoyo financiero</a>
                                                        <strong>Fecha límite: 24 de Mayo del 2018</strong>
                                                    </li>
                                                    <li>Obtener un promedio igual o superior a 85 en el semestre activo</li>
                                                    <li>Cumplir satisfactoriamente con su servicio becario (Si es que ya cuenta con algún % de apoyo)</li>
                                                    <li>No reprobar materias</li>
                                                </ul>
                                                <p>Nota: No se podrán solicitar reconsideraciones después de la fecha límite establecida.</p>
                                            </div>
                                            <br/>
                                            <h3 class="text-heading">
                                                Recuperar porcentaje de beca
                                            </h3>
                                            <div class="text-justify">
                                                <ul>
                                                    <li>Solicitar por escrito al correo becas.tam@itesm.mx  la reconsideración de su apoyo a más tardar el  <strong>24 de Mayo del 2018.</strong></li>
                                                    <li>Obtener un promedio igual o superior a 85 en el semestre activo.</li>
                                                    <li>Cumplir satisfactoriamente con su servicio becario (Si es que ya cuenta con algún % de apoyo)</li>
                                                    <li>No reprobar materias</li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!-- end row-->
                    <br/>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            @include('partials.flash')
                            @include('partials.errors')
                            {!! Form::open(['url' => 'scholarservice']) !!}
                                <div class="form-group">
                                    {!! Form::label('enrollment', 'Matrícula') !!}
                                    {!! Form::text('enrollment', null, ['class' => 'form-control','placeholder' => 'A0*******' , ]) !!}
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('confirmed', 1,null,array('class' => 'round-space', )) !!}
                                        <p class="text-justify">
                                            He leído las políticas anteriores de los requisitos
                                            para el refrendo del apoyo educativo y me comprometo a hacer de conocimiento a mis padres.
                                        </p>
                                    </label>
                                </div>
                                <div class="text-center">
                                    {!! Form::submit('Enviar', ['class' => 'btn btn-default', ]) !!}
                                </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
