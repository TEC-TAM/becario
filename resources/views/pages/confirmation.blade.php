@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">Durante el semestre {!! $period->semester !!} estarás realizando tu servicio becario en: <br><small>{!!$student->user->work_area!!}</small> - <small class="text-center">{!! $student->user->name !!} {!! $student->user->last_name !!}</small></h1>
                    <ul>
                        <li>Es obligación del alumno descargar el siguiente formato de asignación de servicio becario.    (Descargar formato pdf)</li>
                        <li>Llenarlo y entregarlo firmado en las oficinas del Centro de Admisiones a más tardar el {!! $period->deadline_to_hand_in_file !!}</li>
                    </ul>
                    <p>
                        Este requisito es obligatorio para notificar al Departamento de Apoyos Educativos que el alumno se ha reportado con el responsable de su servicio. El incumplimiento de esta política causara condicionamiento o cancelación de la beca o beca-financiamiento.
                    </p>
                    <div class="text-center">
                        {!! HTML::decode(link_to('createpdf/'.$student->id, '<i class="glyphicon glyphicon-save-file"></i> Download', ['class' => 'btn btn-primary'],null )) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
