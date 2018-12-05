@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Lista de becarios</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr class="active">
                            <th>Nombre</th>
                            <th>Matrícula</th>
                            <th>Carrera</th>
                            <th>Hoja de Servicio</th>
                            <th>Calificado</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{!! $student->name !!} {!! $student->last_name !!} {!! $student->middle_name !!}</td>
                                <td>{!! $student->itesm_id !!}</td>
                                <td>{!! $student->career !!}</td>
                                <td>
                                  @if($student->rated)
                                      <span class="label label-success">Entregada</span>
                                  @else
                                      <span class="label label-danger">Sin entregar</span>
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
                                    {!! HTML::decode(link_to('schoolboys/'.$student->id,'<i class="glyphicon glyphicon-eye-open"></i> Ver',['class' => 'btn btn-default btn-xs btn-block'],null )) !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection
