

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
        
        $t3 = explode(" ", $turno2->fecha_turno);
        $date1 = date_create($turno2->fecha_turno);

        echo "<b>".$i.". </b><br> <b>Fecha:</b> "; 

        if(date_format($date1, "L") == "0") echo "Lunes";
        if(date_format($date1, "L") == "1") echo "Martes";
        if(date_format($date1, "L") == "2") echo "Miercoles";
        if(date_format($date1, "L") == "3") echo "Jueves";
        if(date_format($date1, "L") == "4") echo "Viernes";
        if(date_format($date1, "L") == "5") echo "Sabado";
        if(date_format($date1, "L") == "6") echo "Domingo";

        echo " ".$t3[0]."<br><b>Hora:</b> ".$t3[1];

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
