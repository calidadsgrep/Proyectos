<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calidad Sg</title>
    <!-- Google Font: Source Sans Pro -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/plugins/full_calendar/css/styles.css">
    <link rel='stylesheet' type='text/css' href='../../assets/plugins/full_calendar/css/fullcalendar.css' />
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='../../assets/plugins/full_calendar/js/moment.min.js'></script>
    <script type='text/javascript' src='../../assets/plugins/full_calendar/js/fullcalendar.min.js'></script>
    <script type='text/javascript' src='../../assets/plugins/full_calendar/js/locale/es.js'></script>
    <script type='text/javascript'>
        function addZero(i) {
            if (i < 10) {
                i = '0' + i;
            }
            return i;
        }

        var hoy = new Date();
        var dd = hoy.getDate();
        if (dd < 10) {
            dd = '0' + dd;
        }

        if (mm < 10) {
            mm = '0' + mm;
        }

        var mm = hoy.getMonth() + 1;
        var yyyy = hoy.getFullYear();

        dd = addZero(dd);
        mm = addZero(mm);

        $(document).ready(function() {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultDate: yyyy + '-' + mm + '-' + dd,                
                buttonIcons: true, //show the prev/next text
                weekNumbers: false,
                editable: true,
                eventLimit: true, //allow "more" link when too many events 
                allDay: true,
                events: 'eventos.php',                
                dayClick: function(date, jsEvent, view) {
                    alert('Has hecho click en: ' + date.format());
                },                
                eventClick: function(calEvent, jsEvent, view) {
                    $('#event-title').text(calEvent.title);
                    $('#event-description').html(calEvent.description);
                    $('#modal-event').modal();
                },
            });
        });
    </script>
</head>
<php require_once 'views/layouts/header.php'; ?>
<body>
    
    <div class="container">
        <h1>Cronograma de Actividades</h1>
        <!--<h2 class="lead">PROGRAMACIÓN POR PUESTO</h2>   -->
        <!--<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Sgv</li>
                <li class="breadcrumb-item">Turnos</li>
                <li class="breadcrumb-item">Programación</li>
                <li class="breadcrumb-item "><?php //echo $result[0]['razonsocial'] 
                                                ?></li>
                <li class="breadcrumb-item active"><?php //echo $result[0]['nombre'] 
                                                    ?></li>
                <li class="breadcrumb-item active"><?php //echo $result[0]['puesto'] 
                                                    ?></li>
            </ol>
        </nav>-->
        <div class="row">
            <div id="content" class="col-lg-12">
                <div id="calendar"></div>
                <div class="modal fade" id="modal-event" tabindex="-1" role="dialog" aria-labelledby="modal-eventLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="event-title"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="event-description"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>