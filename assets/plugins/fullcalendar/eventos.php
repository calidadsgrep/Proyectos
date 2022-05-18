<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//load.php //$id=$_GET['id'];
 require '../../control/auth/bd_conection.php';

// $id=$_REQUEST['id'];
        
           /*
           SELECT obras.`nombre`,obras.id AS obra_id ,puestos.nombre,turnos.*,usuarios.Nombre,Apellido FROM `obras`,puestos,turnos,usuarios WHERE obras.id=puestos.obra_id AND obras.id=73 AND puestos.id=turnos.puesto_id AND turnos.usuario_id=usuarios.id AND turnos.usuario_id=usuarios.id
           SELECT obras.`nombre`,obras.id AS obra_id ,puestos.nombre,turnos.*,usuarios.Nombre,Apellido FROM `obras`,puestos,turnos,usuarios WHERE obras.id=puestos.obra_id AND puestos.id=turnos.puesto_id AND turnos.usuario_id=usuarios.id
           SELECT obras.`nombre`,puestos.nombre,turnos.*,usuarios.Nombre,Apellido FROM `obras`,puestos,turnos,usuarios WHERE obras.id=puestos.obra_id AND puestos.id=turnos.puesto_id AND turnos.usuario_id=usuarios.id*/
            try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT turnos.*, usuarios.* FROM turnos,usuarios WHERE puesto_id='$_REQUEST[id]' AND usuarios.id=turnos.usuario_id ");
            $stmt->execute();
            $result = $stmt->fetchAll();
            
            /*  echo'<pre>';
                print_r($result);
             echo'</pre>';*/
            
            
            foreach($result as $row)
            
                {
                if($row["jornada"]=='Diurno'){
                    $color='#2CA849';
                    $textColor= '#ffffff';
                    $title=$row["Nombre"].' '.$row["Apellido"].' '.$row["jornada"];
                } 
                    
                if($row["jornada"]=='Nocturno'){
                    $color='#A80300';
                    $textColor= '#ffffff';
                    $title=$row["Nombre"].' '.$row["Apellido"].' '.$row["jornada"];
                }    
                    
                 if($row["jornada"]=='Libre'){
                    $color='#F5E80C';
                    $textColor= '#000000';
                    $title=$row["Nombre"].' '.$row["Apellido"].' '.$row["jornada"];
                } 
                
                if($row["jornada"]=='Cambio Turno'){
                    $color='#25B8F5';
                    $textColor= '#ffffff';
                    $title=$row["Nombre"].' '.$row["Apellido"].' '.$row["jornada"];
                } 
                    
                 $data[] = array(
                  'id'   => $row["id"],
                  'title'   => $title,
                  'start'   => $row["fecha"],
                  'end'   => $row["fecha"],
                  'color' => $color,
                  'textColor' => $textColor,
                 );
                 
                }
                 echo json_encode($data, JSON_HEX_QUOT | JSON_HEX_TAG);
                }catch(PDOException $e){
                     echo $e->getMessage();
                    }
            
   
