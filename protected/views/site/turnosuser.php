

<?php $empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);  ?>

<h3>Turnos de la semana</h3>

<?php
    $turno1 = UsuariosHasTurnos::model()->findAllByAttributes(array('usuarios_id_usuario'=>Yii::app()->session['var']));
    $i=1;
    
    if($turno1 != null)
    {
        foreach($turno1 as $t)
    {
        ?>
        <div class="well">
        <?php
        $turno2 = Turnos::model()->findByAttributes(array('id_turno'=>$t->turnos_id_turno));
        $model3 = Yii::app()->db->createCommand("select estado from usuarios_has_turnos
                where usuarios_id_usuario=".Yii::app()->session['var']." and estado='Aceptado' and turnos_id_turno=".$turno2->id_turno.";")->queryScalar();
        $model4 = Yii::app()->db->createCommand("select usuarios_id_usuario from usuarios_has_turnos
                where estado='Rechazado' and turnos_id_turno=".$turno2->id_turno.";")->queryScalar();
        
        $t3 = explode(" ", $turno2->fecha_turno);
        $date1 = date_create($turno2->fecha_turno);

        echo "<b>".$i.". </b><br> <b>Fecha:</b> "; 

        if(date_format($date1, "w") == "1") echo "Lunes";
        if(date_format($date1, "w") == "2") echo "Martes";
        if(date_format($date1, "w") == "3") echo "Miercoles";
        if(date_format($date1, "w") == "4") echo "Jueves";
        if(date_format($date1, "w") == "5") echo "Viernes";
        if(date_format($date1, "w") == "6") echo "Sabado";
        if(date_format($date1, "w") == "0") echo "Domingo";

        echo " ".$t3[0]."<br><b>Hora:</b> ".$t3[1];
        
        if($model3 == "Aceptado")
        {
            echo "<br><b>Estado:</b> Aceptado";

            if($model4)
            {
                $model5 = Usuarios::model()->find('id_usuario='.$model4);
                echo "<br><b>Regalado por ".$model5->nom_usuario." ".$model5->apel1_usuario." ".$model5->apel2_usuario."</b>";
            }
            
            
            

            echo "<br>";
            echo "<br><div type=\"button\" class=\"btn btn-danger\" onclick=\"location.href='".Yii::app()->baseUrl."/site/regalaturno/".$turno2->id_turno."';\">Regalar turno</div>";
        }
        else
        {
            echo "<br><b>Estado:</b> Regalado";
            echo "<br>";
        }
        
        $i++;
        ?>
        </div>
        <?php
                
    }
        
    }
    else
    {
        echo "No se encuentran turnos registrados en esta semana";
    }

?>
