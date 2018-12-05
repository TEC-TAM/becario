@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Archivos seeders</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr class="active">
                            <th>Nombre del archivo</th>
                            <th>Descripción</th>
                            <th>Tipo de información</th>
                            <th>Usado</th>
                            <th>Fecha de creación</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($imports as $import)
                            <tr>
                                <td>{!! $import->file_url !!}</td>
                                <td>{!! $import->description !!}</td>
                                <td>
                                    @if($import->type)
                                        <span class="label label-info">Seeder de maestros</span>
                                    @else
                                        <span class="label label-info">Seeder de alumnos</span>
                                    @endif
                                </td>
                                <td>
                                    @if($import->used)
                                        <span class="label label-success">Importado</span>
                                    @else
                                        <span class="label label-danger">Sin Importar</span>
                                    @endif
                                </td>
                                <td>{!! $import->created_at->format('d-m-Y') !!}</td>
                                <td>
                                    @if($import->type)
                                        {!! HTML::decode(link_to('seeders/'.$import->id.'/teachers','<i class="glyphicon glyphicon-import"></i> Importar',['class' => 'btn btn-default btn-xs'],null )) !!}
                                    @else
                                        {!! HTML::decode(link_to('seeders/'.$import->id.'/students','<i class="glyphicon glyphicon-import"></i> Importar',['class' => 'btn btn-default btn-xs'],null )) !!}

                                    @endif
                                </td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'action' => ['ImportsController@destroy',$import->id]]) !!}
                                    {!! Form::button('<i class="glyphicon glyphicon-remove-sign"></i> Eliminar', array('type' => 'submit', 'class' => 'btn btn-danger btn-block btn-xs'))!!}
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection