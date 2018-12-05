@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Calificar al becario: {!! $student->itesm_id !!}</h3>
                    <div class="btn-group pull-right">
                        {!! HTML::decode(link_to('schoolboys/'.$student->id,'<i class="glyphicon glyphicon-arrow-left"></i> Volver',['class' => 'btn btn-xs btn-default'],null )) !!}
                    </div>
                </div>
                <div class="modal-body">
                    @include('partials.errors')
                    {!! Form::open(array('url' => 'schoolboys/'.$student->id.'/rate','class'=>'form-horizontal')) !!}
                        <div class="form-group">
                            <label class="col-xs-3 control-label">El servicio becario ofrecido por el alumno fue:</label>
                            <div class="col-xs-9">
                                {!! Form::select('service_rate', ['' => '-Selecciona una calificación-',
                                                            'Excelente'=>'Excelente',
                                                            'Bueno' => 'Bueno',
                                                            'Malo' => 'Malo',
                                                            'Pésimo' => ' Pésimo'], null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Desea que este alumno continue con usted el siguiente semestre</label>
                            <div class="col-xs-9">
                                {!! Form::select('reassigned', ['' => '-Selecciona un alternativa-',
                                                            '1'=>'Si',
                                                            '0' => 'No'], null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    {!! Form::submit('Calificar',['class' => 'btn btn-primary  btn-block form-control']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection