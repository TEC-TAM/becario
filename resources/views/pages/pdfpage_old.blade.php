<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Servico becario</title>
    <link rel="stylesheet" href="{{asset('/css/pdf.css')}}"/>    
</head>
<body>
<div class="container">
    <div class="header-wrapper">
        <p>DIRECCION DE ADMISIONES Y APOYOS EDUCATIVOS</p>
        <img class="resized" src="{{asset('/images/logo.jpg')}}" alt="">
    </div>
    <div class="activities-wrapper">
        <p>Durante el semestre <b>{!! $period->semester !!}</b> estaré prestando el servicio becario con:</p>
        <div>
            <small>{!!$student->user->work_area!!}</small> - <small class="text-center">{!! $student->user->name !!} {!! $student->user->last_name !!}</small>
        </div>
        <p style="margin-top:-5px;">Las principales tareas que realizará durante el semestre son:</p>
        <table class="table">
            <tr>
                <td class="number">1</td>
                <td class="description"></td>
            </tr>
            <tr>
                <td class="number">2</td>
                <td class="description"></td>
            </tr>
            <tr>
                <td class="number">3</td>
                <td class="description"></td>
            </tr>
            <tr>
                <td class="number">4</td>
                <td class="description"></td>
            </tr>
            <tr>
                <td class="number">5</td>
                <td class="description"></td>
            </tr>
        </table>
    </div>
    <div class="schedule-wrapper">
        <p>Rellenar los espacios de las horas disponibles con las que cuenta el alumno para realizar actividades de servicio becario:</p>
        <table class="schedule" style="margin-top:-5px;">
            <tr class="header">
                <td class="hour">Hora/Día</td>
                <td class="day">Lunes</td>
                <td class="day">Martes</td>
                <td class="day">Miercoles</td>
                <td class="day">Jueves</td>
                <td class="day">Viernes</td>
            </tr>
            <tr>
                <td class="hour">8:00 A 9:00</td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
            </tr>
            <tr>
                <td class="hour">9:00 A 10:00</td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
            </tr>
            <tr>
                <td class="hour">10:00 A 11:00</td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
            </tr>
            <tr>
                <td class="hour">11:00 A 12:00</td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
            </tr>
            <tr>
                <td class="hour">12:00 A 1:00</td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
            </tr>
            <tr>
                <td class="hour">1:00 A 2:00</td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
            </tr>
            <tr>
                <td class="hour">2:00 A 3:00</td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
            </tr>
            <tr>
                <td class="hour">3:00 A 4:00</td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
            </tr>
            <tr>
                <td class="hour">4:00 A 5:00</td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
                <td class="day"></td>
            </tr>
        </table>
    </div>

    <!--<div class="page-break"></div>-->
    <div class="warnnings-wrapper">
        <p>Importante:</p>
        <ul style="margin-top:-5px;">
            <li>Un alumno de PREPARATORIA debe acumular al final del semestre un total de <strong class="underline">48 horas</strong></li>
            <li>Un alumno de PROFESIONAL debe acumular al final del semestre un total de <strong class="underline">80 horas</strong></li>
            <li><strong class="underline">La fecha límite para completar las horas de servicio becario es el {!! $period->deadline_to_finish_service !!}</strong></li>
        </ul>
        <p style="margin-top:-5px;">Información del alumno</p>
        <ul style="margin-top:-5px;">
            <li><b>Nombre del Alumno:</b> {!! $student->name !!} {!! $student->last_name !!} {!! $student->middle_name !!} <b>Matrícula:</b> {!! $student->itesm_id !!}</li>
            <li><b>Carrerar:</b>  {!! $student->career !!} <b>Email personal:</b>________________________________ <b>Celular:</b>___________________</li>
            <li><b>Nombre y firma del alumno:</b>_______________________________________________________________</li>
            <li><b>Nombre y firma del responsable de servicio becario:</b>____________________________________________</li>
            <li>Esta hoja deberá ser entregada por el alumno becario, en el CENTRO DE ADMISIONES, a más tardar el {!! $period->deadline_to_hand_in_file !!} <br> El incumplimiento de esta política causara condicionamiento o cancelación de la beca o beca-financiamiento.</li>
        </ul>
    </div>
</div>
</body>
</html>
