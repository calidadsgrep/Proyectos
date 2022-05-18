<?php
require '../../models/Database.php';
require '../../models/Horario.php';
$horario= new Horario();
$act=$horario->Obtener(1);
/*echo'<pre>';
print_r($act);
echo'</pre>';*/

foreach ($act as $row) {
   
        $color = '#2CA849';
        $textColor = '#ffffff';
        $title = $row["hora1"].' a '. $row["hora2"];
        $hora1= $row["fecha"].'T'.$row["hora1"];
        $hora2=$row["fecha"].'T'.$row["hora2"];
        $description= 'Objetivo:'. $row["objetivo"].'<br> Actividad:'.$row["actividad"].'<br> Inicio:'.$row["hora1"].'<br> Cierre:'.$row["hora1"];

    $data[] = array(
        'id'   => $row["id"],
        'title'   => $title,
        'description'=> $description,
        'start'   => $row["fecha"],
        'end'   => $row["fecha"],
        'color' => $color,
        'textColor' => $textColor,
    );
}
echo json_encode($data, JSON_HEX_QUOT | JSON_HEX_TAG);


?>
