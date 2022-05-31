<?php
require '../../models/Database.php';
require '../../models/Horario.php';
$horario= new Horario();
$act=$horario->Obtener();

/*echo'<pre>';
print_r($act);
echo'</pre>';*/

foreach ($act as $row) {
    $row["estado"]==0 ? $color = '#ed4a13' :$color = '#2CA849' ;

        $textColor = '#ffffff';
        $title = $row["fullName"].' '.$row['objetivo'];
        $hora1= $row["fecha"].' '.$row["hora1"];
        $hora2= $row["fecha"].' '.$row["hora2"];
        $description= 'Cliente:'. $row["cliente"].'<br> Objetivo:'. $row["objetivo"].'<br> Actividad:'.$row["actividad"].'<br> Inicio:'.$row["hora1"].'<br> Termina:'.$row["hora1"];

    $data[] = array(
        'id'   => $row["id"],
        'title'   => $title ,
        'start'   => $hora1,
        'end'   => $hora2,            
        'description'=> $description,                   
        'color' => $color,
        'textColor' => $textColor,
         'allDay'=> 'false',
         'timeFormat'=> 'H(:mm)',
    );
}



//echo '<pre>';
echo json_encode($data, JSON_HEX_QUOT | JSON_HEX_TAG);
//echo '</pre>';
