<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<?php
$model= Turnos::model()->findall(array('order'=>'fecha_turno'));

$nuevafecha2 = date ( 'l j/m' , strtotime("tuesday this week"));
$m2_f2 = explode(" ", $nuevafecha2);

echo "<h4>Mar ".$m2_f2[1]."</h4>";

$nuevafecha3 = date ( 'l j-m' , strtotime("tuesday this week"));
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
        
        
        
        if($m2_f1[0] == 'Tuesday' && ($m2[0] == $m2_f3[1]))
        {
            $model1 = UsuariosHasTurnos::model()->findall('turnos_id_turno='.$m->id_turno.' and estado="Aceptado"');
            $model2 = UsuariosHasTurnos::model()->findall('turnos_id_turno='.$m->id_turno.' and estado="Aceptado"');
            $model3 = Yii::app()->db->createCommand("select usuarios_id_usuario from usuarios_has_turnos
                where usuarios_id_usuario=".Yii::app()->session['var']." and estado='Aceptado' and turnos_id_turno=".$m->id_turno.";")->queryScalar();
            
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
            
            
            echo "<h5><a href='#'>".$m2[1]." - ".$m2_f[1]."</a></h5>";
            
            if($model3 != Yii::app()->session['var'])
            {
                echo "<div type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='".Yii::app()->baseUrl."/site/tomaturno/".$m->id_turno."';\">Tomar turno</div>";
            }
            else if($model3 == Yii::app()->session['var'])
            {
                //echo "<div type=\"button\" class=\"btn btn-danger\" onclick=\"location.href='".Yii::app()->baseUrl."/site/regalaturno/".$m->id_turno."';\">Regalar turno</div>";
            }
            
            
            
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

