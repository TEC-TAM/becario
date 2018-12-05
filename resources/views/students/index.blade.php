@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Lista de estudiantes asignados a servicio becario</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="active">
                                <th>Nombre</th>
                                <th>Matrícula</th>
                                <th>Carrera</th>
                                <th>Asignado a</th>
                                <th>Área</th>
                                <th>Hoja</th>
                                <th>Status</th>
                                <th>Calificado</th>
                                <th colspan="2" class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{!! $student->name !!} {!! $student->last_name !!}</td>
                                <td>{!! $student->itesm_id !!}</td>
                                <td>{!! $student->career !!}</td>
                                <td>{!! $student->user->name !!} {!! $student->user->last_name !!}</td>
                                <td><span class="label label-success">{!! $student->user->work_area !!}</span></td>
                                <td>
                                  @if($student->delivered)
                                    <span class="label label-primary">Entregado</span>
                                  @else
                                    <span class="label label-danger">Sin Entregar</span>
                                  @endif
                                </td>
                                <td>
                                    @if($student->confirmed)
                                        <span class="label label-primary">Confirmado</span>
                                    @else
                                        <span class="label label-danger">Sin confirmar</span>
                                    @endif
                                </td>
                                <td>
                                    @if($student->rated)
                                        <span class="label label-success">Calificado</span>
                                    @else
                                        <span class="label label-danger">Sin calificar</span>
                                    @endif
                                </td>
                                <td>
                                    {!! HTML::decode(link_to('students/'.$student->id,'<i class="glyphicon glyphicon-eye-open"></i> Ver',['class' => 'btn btn-default btn-xs btn-block'],null )) !!}
                                </td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'action' => ['StudentsController@destroy',$student->id]]) !!}
                                    {!! Form::button('<i class="glyphicon glyphicon-remove-sign"></i> Eliminar', array('type' => 'submit', 'class' => 'btn btn-danger btn-block btn-xs'))!!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {!! $students->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
