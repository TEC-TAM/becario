@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Información del maestro</h3>
                    <div class="btn-group pull-right">
                        {!! HTML::decode(link_to('teachers','<i class="glyphicon glyphicon-arrow-left"></i> Volver', ['class' => 'btn btn-xs btn-default'],null )) !!}
                    </div>
                </div>
                <div class="list-group">
                    <div class="list-group-item">
                        <p class="list-group-item-text">Nombre</p>
                        <h4 class="list-group-item-heading">{!! $teacher->name !!} {!! $teacher->last_name !!} {!! $teacher->middle_name !!}</h4>
                    </div>
                    <div class="list-group-item">
                        <p class="list-group-item-text">Email</p>
                        <h4 class="list-group-item-heading">{!! $teacher->email !!}</h4>
                    </div>
                    <div class="list-group-item">
                        <p class="list-group-item-text">N° de nómina</p>
                        <h4 class="list-group-item-heading">{!! $teacher->itesm_id !!}</h4>
                    </div>
                    <div class="list-group-item">
                        <p class="list-group-item-text">Área de trabajo</p>
                        <h4 class="list-group-item-heading">{!! $teacher->work_area !!}</h4>
                    </div>
                    <div class="list-group-item">
                        <div class="text-center">
                            {!! link_to('teachers/'.$teacher->id.'/edit','Editar',['class' => 'btn btn-default']) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="bootcards-list">
                <div class="panel panel-primary">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title pull-left">Becarios asignados</h3>
                    </div>
                    @if(count($teacher->students) > 0)
                    <div class="list-group">
                        @foreach($teacher->students as $schoolboy)
                            <a class="list-group-item" href="../students/{!!$schoolboy->schoolboy_id!!}">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h4 class="list-group-item-heading">{!! $schoolboy->name !!} {!! $schoolboy->last_name !!}</h4>
                                        <p class="list-group-item-text">{!! $schoolboy->itesm_id !!}</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="list-group-item-text">{!! $schoolboy->career !!}</p>
                                        <p class="list-group-item-text">
                                            @if($schoolboy->rated)
                                                <span class="label label-success">Excelente</span>
                                            @else
                                                <span class="label label-danger">Sin calificar</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="list-group-item-text">
                                            <strong>Reasignación:</strong> Si
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    @else
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="list-group-item-text">
                                    <div class="text-center">
                                        <span class="label label-info">Sin Becarios asignados</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection