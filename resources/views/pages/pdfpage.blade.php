<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Servico becario</title>
    <link rel="stylesheet" href="{{asset('/css/pdf.css')}}"/>
</head>
<style type="text/css">
    body{font-size:10px;}
</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12 text-center">
            <p>DIRECCIÓN DE ADMISIONES Y APOYOS EDUCATIVOS</p>
            <img class="img-responsive col-xs-4 col-md-4 col-lg-4" src="{{asset('/images/logo.jpg')}}"></img>
            <p>Durante el semestre <b>{!! $period->semester !!}</b> estaré prestando el servicio becario con:</p>
            <small>{!!$student->user->work_area!!}</small> - <small class="text-center">{!! $student->user->name !!} {!! $student->user->last_name !!}</small>
            <p>Las principales tareas que realizará durante el semestre son:</p>
            <table class="table-bordered col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <tr>
                    <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></td>
                    <td class="col-xs-10 col-sm-10 col-md-10 col-lg-10"></td>
                </tr>
                <tr>
                    <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">1</td>
                    <td class="col-xs-10 col-sm-10 col-md-10 col-lg-10"></td>
                </tr>
                <tr>
                    <td class="col-xs-2 col-md-2 col-lg-2">2</td>
                    <td class="col-xs-10 col-md-10 col-lg-10"></td>
                </tr>
                <tr>
                    <td class="col-xs-2 col-md-2 col-lg-2">3</td>
                    <td class="col-xs-10 col-md-10 col-lg-10"></td>
                </tr>
                <tr>
                    <td class="col-xs-2 col-md-2 col-lg-2">4</td>
                    <td class="col-xs-10 col-md-10 col-lg-10"></td>
                </tr>
                <tr>
                    <td class="col-xs-2 col-md-2 col-lg-2">5</td>
                    <td class="col-xs-10 col-md-10 col-lg-10"></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row" style="margin-top:80px;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="text-center">
            <p>Rellenar los espacios de las horas disponibles con las que cuenta el alumno para realizar actividades de servicio becario:</p>
                <table class="table-bordered" stylw="margin-top:100px;">
                    <tr>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                    </tr>
                    <tr>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Hora/Día</th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Lunes</th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Martes</th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Miercoles</th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Jueves</th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Viernes</th>
                    </tr>
                    <tr>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">8:00 A 9:00</th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                    </tr>
                    <tr>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">9:00 A 10:00</th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                    </tr>
                    <tr>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">10:00 A 11:00</th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                    </tr>
                    <tr>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">11:00 A 12:00</th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                    </tr>
                    <tr>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">12:00 A 13:00</th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                    </tr>
                    <tr>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">13:00 A 14:00</th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                    </tr>
                    <tr>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">14:00 A 15:00</th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                    </tr>
                    <tr>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">15:00 A 16:00</th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                    </tr>
                    <tr>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">16:00 A 17:00</th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                    </tr>
                </table>
            </div>    
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p>Importante:</p>
            <ul>
                <li>Un alumno de PREPARATORIA debe acumular al final del semestre un total de <strong class="underline">48 horas</strong></li>
                <li>Un alumno de PROFESIONAL debe acumular al final del semestre un total de <strong class="underline">80 horas</strong></li>
                <li><strong class="underline">La fecha límite para completar las horas de servicio becario es el {!! $period->deadline_to_finish_service !!}</strong></li>    
            </ul>
            <p>Información del alumno</p>
            <ul>
                <li><b>Nombre del Alumno:</b> {!! $student->name !!} {!! $student->last_name !!} {!! $student->middle_name !!} <b>Matrícula:</b> {!! $student->itesm_id !!}</li>
                <li><b>Carrerar:</b>  {!! $student->career !!} <b>Email personal:</b>________________________________ <b>Celular:</b>___________________</li>
                <li><b>Nombre y firma del alumno:</b>_______________________________________________________________</li>
                <li><b>Nombre y firma del responsable de servicio becario:</b>____________________________________________</li>
                <li>Esta hoja deberá ser entregada por el alumno becario, en el CENTRO DE ADMISIONES, a más tardar el {!! $period->deadline_to_hand_in_file !!} <br> El incumplimiento de esta política causara condicionamiento o cancelación de la beca o beca-financiamiento.</li>
                <li>ESTATUS DE BECA <br>Te recuerdo que tu estatus de beca para el semestre {!!$period->semester !!} es: <b>{!!$student->status !!}</b></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
