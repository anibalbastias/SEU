<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<?php
$model= Turnos::model()->findall(array('order'=>'fecha_turno'));

$nuevafecha2 = date ( 'l j/m' , strtotime("wednesday this week"));
$m2_f2 = explode(" ", $nuevafecha2);

echo "<h4>Mie ".$m2_f2[1]."</h4>";

$nuevafecha3 = date ( 'l j-m' , strtotime("wednesday this week"));
$m2_f3 = explode(" ", $nuevafecha3);

if($model)
{
    foreach($model as $m)
    {
        $nuevafecha0 = date ( 'j-m H:i' , strtotime($m->fecha_turno));
        $m2=  explode(" ", $nuevafecha0);

        $fecha = $m->fecha_turno; //inicializo la fecha con la hora

        $nuevafecha = strtotime ( '+3 hour' , strtotime ( $fecha ) ) ;
        $nuevafecha = strtotime ( '+30 minute' , $nuevafecha ) ; // utilizo "nuevafecha"
        $nuevafecha = date ( 'j-m H:i' , $nuevafecha );
        $nuevafecha1 = date ( 'l j-m H:i' , strtotime($fecha));

        $m2_f = explode(" ", $nuevafecha);
        $m2_f1 = explode(" ", $nuevafecha1);
        
        
        
        if($m2_f1[0] == 'Wednesday' && ($m2[0] == $m2_f3[1]))
        {
            $model1 = UsuariosHasTurnos::model()->findall('turnos_id_turno='.$m->id_turno);
            $model2 = UsuariosHasTurnos::model()->findall('turnos_id_turno='.$m->id_turno);
            
            $count1 = $m->cupos_turno - count($model1);
            
            if($model2 && $count1 != 0)
            {
                echo '<div class="well_concupos">';
            }
            else if($model2 && $count1 == 0)
            {
                echo '<div class="well_sincupos">';
            }
            else
            {
                echo '<div class="well_cupos">';
            }
            
            //echo "<h5>Turno: ".$m2[0]."</h5>";
            echo "<h5><a href='#'>".$m2[1]." - ".$m2_f[1]."</a></h5>";
            
            if($count1 != 0)
            {
                echo "<h6>".($count1)." cupos restantes</h6>";
            }
            else 
            {
                echo "<h6>Sin cupos</h6>";
            }
            

            if($model1)
            {
                $j=1;
                foreach($model1 as $m2)
                {
                    $model2 = Usuarios::model()->findall('id_usuario='.$m2->usuarios_id_usuario);
                    foreach($model2 as $m3)
                    {
                        echo "<p class='enum_user'>".$j.". ".$m3->nom_usuario." ".$m3->apel1_usuario."</p>";
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

