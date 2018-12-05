@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Lista de maestros</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr class="active">
                            <th>Nómina</th>
                            <th>Nombre</th>
                            <th>Ap. Paterno</th>
                            <!-- <th>Ap. Materno</th> -->
                            <th>Área</th>
                            <th colspan="2" class="text-center">
                                Acciones
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td>{!! $teacher->itesm_id !!}</td>
                                <td>{!! $teacher->name !!}</td>
                                <td>{!! $teacher->last_name !!}</td>
                                <!-- <td>{!! $teacher->middle_name !!}</td> -->
                                <td>
                                    <span class="label label-success">{!! $teacher->work_area !!}</span>
                                </td>
                                <td>
                                    {!! HTML::decode(link_to('teachers/'.$teacher->id,'<i class="glyphicon glyphicon-eye-open"></i> Ver',['class' => 'btn btn-default btn-xs btn-block'],null )) !!}
                                </td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'action' => ['TeachersController@destroy',$teacher->id]]) !!}
                                    {!! Form::button('<i class="glyphicon glyphicon-remove-sign"></i> Eliminar', array('type' => 'submit', 'class' => 'btn btn-danger btn-block btn-xs'))!!}
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="text-center">
                        {!! $teachers->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
