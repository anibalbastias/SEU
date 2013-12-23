<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<?php
$model= Turnos::model()->findall(array('order'=>'fecha_turno'));

if($model)
{
    foreach($model as $m)
    {
        $m2=  explode(" ", $m->fecha_turno);

        $fecha = $m->fecha_turno; //inicializo la fecha con la hora

        $nuevafecha = strtotime ( '+3 hour' , strtotime ( $fecha ) ) ;
        $nuevafecha = strtotime ( '+30 minute' , $nuevafecha ) ; // utilizo "nuevafecha"
        $nuevafecha = date ( 'Y-m-j H:i:s' , $nuevafecha );
        $nuevafecha1 = date ( 'l Y-m-j H:i:s' , strtotime($fecha));

        $m2_f = explode(" ", $nuevafecha);
        $m2_f1 = explode(" ", $nuevafecha1);

        if($m2_f1[0] == 'Tuesday')
        {
            $model1 = UsuariosHasTurnos::model()->findall('turnos_id_turno='.$m->id_turno);
            $model2 = UsuariosHasTurnos::model()->findall('turnos_id_turno='.$m->id_turno);
            
         
                echo '<div class="cuadro_turno">';
            
            
            echo "<h5>Turno: ".$m2[0]."</h5>";
            echo "<h5>Hora: ".$m2[1]." - ".$m2_f[1]."</h5>";
            echo "<h5>Cupos: ".$m->cupos_turno."</h5>";

            if($model1)
            {
                $j=1;
                foreach($model1 as $m2)
                {
                    $model2 = Usuarios::model()->findall('id_usuario='.$m2->usuarios_id_usuario);
                    foreach($model2 as $m3)
                    {
                        echo $j.". ".$m3->nom_usuario." ".$m3->apel1_usuario." ".$m3->apel2_usuario."<br/>";
                        $j++;
                    }
                }
            }
            else
            {
                echo "Sin inscritos<br/>";
            }
            
            echo "</div>";
        }
    }
}
else
{
    echo 'No existe el modelo';
}
?>

