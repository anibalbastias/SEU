

<?php $empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);  ?>

<h3>Turnos de la semana</h3>

<p>Turnos registrados durante la semana actual por el usuario.</p>

<?php
    //$turno1 = UsuariosHasTurnos::model()->findAllByAttributes(array('usuarios_id_usuario'=>Yii::app()->session['var']));
    $fecha1 = date ( 'Y-m-d H:i:s' , strtotime("monday this week"));
    $fecha2 = date ( 'Y-m-d H:i:s' , strtotime("sunday next week"));
    
    $turno1 = Yii::app()->db->createCommand("
                select turnos_id_turno
                from usuarios_has_turnos,turnos
                where 
                usuarios_has_turnos.turnos_id_turno = turnos.id_turno
                and usuarios_has_turnos.usuarios_id_usuario=".Yii::app()->session['var']." 
                and turnos.fecha_turno >= '".$fecha1."' 
                and turnos.fecha_turno < '".$fecha2."';")->queryAll();
        
    $i=1;
    
    if($turno1 != null)
    {
        foreach($turno1 as $t1)
        {
            foreach($t1 as $t)
            {
                
            
        ?>
        <div class="row-fluid">
          
        <div class=" alinear">
          <div class="mis_turnos">    
        <?php
        
        $turno2 = Turnos::model()->find("id_turno=".$t."");
        
        $model3 = Yii::app()->db->createCommand("
                select estado 
                from usuarios_has_turnos
                where usuarios_id_usuario=".Yii::app()->session['var']." 
                and estado='Aceptado' 
                and turnos_id_turno=".$turno2->id_turno.";")->queryScalar();
        
        $model4 = Yii::app()->db->createCommand("
                select usuarios_id_usuario 
                from usuarios_has_turnos
                where estado='Rechazado' 
                and turnos_id_turno=".$turno2->id_turno.";")->queryScalar();
        
        //echo $fecha1." - ".$fecha2;
        
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
        
    }
    else
    {
        echo "<div class='row-fluid'>
        <div class='span4'>
        <div class='alert alert-success'>
        <p>No se encuentran turnos registrados</p>
        </div>
        </div>
        </div>";
    }

?>
