

<?php $empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);  ?>

<h3>Turnos de la semana</h3>

<?php
    $turno1 = UsuariosHasTurnos::model()->findAllByAttributes(array('usuarios_id_usuario'=>Yii::app()->session['var']));
    $i=1;
    
    $criteria = new CDbCriteria();
    $criteria->order = "fecha_turno ASC";
    
    if($turno1 != null)
    {
        foreach($turno1 as $t)
    {
        ?>
        <div class="row-fluid">
          
        <div class=" alinear">
          <div class="mis_turnos">    
        <?php
        $turno2 = Turnos::model()->findByAttributes(array('id_turno'=>$t->turnos_id_turno));
//        $turno2 = $turno_s->$criteria;
//        $turno2->find($criteria);
        
        $model3 = Yii::app()->db->createCommand("select estado from usuarios_has_turnos
                where usuarios_id_usuario=".Yii::app()->session['var']." and estado='Aceptado' and turnos_id_turno=".$turno2->id_turno.";")->queryScalar();
        $model4 = Yii::app()->db->createCommand("select usuarios_id_usuario from usuarios_has_turnos
                where estado='Rechazado' and turnos_id_turno=".$turno2->id_turno.";")->queryScalar();
        
//        echo $turno2->fecha_turno;
        
        $t3 = explode(" ", $turno2->fecha_turno);
        $date1 = date_create($turno2->fecha_turno);

        echo "<div class='span3'> <b>Fecha:</b> "; 

        if(date_format($date1, "w") == "1") echo "Lunes";
        if(date_format($date1, "w") == "2") echo "Martes";
        if(date_format($date1, "w") == "3") echo "Miercoles";
        if(date_format($date1, "w") == "4") echo "Jueves";
        if(date_format($date1, "w") == "5") echo "Viernes";
        if(date_format($date1, "w") == "6") echo "Sabado";
        if(date_format($date1, "w") == "0") echo "Domingo";

        echo " ".$t3[0]."</div> <div class='span3'><b>Hora:</b> ".$t3[1]."</div>";
        
        if($model3 == "Aceptado")
        {
            echo "<div class='span3'><b>Estado:</b> Aceptado </div>";

            if($model4)
            {
                $model5 = Usuarios::model()->find('id_usuario='.$model4);
                echo "<div class='well'><b>Regalado por ".$model5->nom_usuario." ".$model5->apel1_usuario." ".$model5->apel2_usuario."</b></div>";
            }
            
            
            

            echo "<div class='span3'><div type=\"button\" class=\"btn btn-mini btn-warning\" onclick=\"location.href='".Yii::app()->baseUrl."/site/regalaturno/".$turno2->id_turno."';\">Regalar turno</div> </div>";
        }
        else
        {
            echo "<div class='span3'><b>Estado:</b> Regalado </div>";
            echo "<br>";
        }
        
        $i++;
        ?>
        </div>
        </div>
        </div>
        <?php
                
    }
        
    }
    else
    {
        echo "No se encuentran turnos registrados en esta semana";
    }

?>
