
<?php

    if(Yii::app()->session['var'] != NULL)
            {

        date_default_timezone_set("Chile/Continental");
        
        //            seteo de la hora para peticion jueves(4) 23:00 - 23:59
            $dia_peticion = '4';
            $hora_peticion = '23';
            $min_i_peticion = '00';
            $min_f_peticion = '59';
            
            
//            seteo de la hora para repechaje Viernes(5) 23:00 - 23:59
            $dia_repechaje = '5';
            $hora_repechaje = '23';
            $min_i_repechaje = '00';
            $min_f_repechaje = '59';
            
             //$fecha_dia = date("w");
                $fecha_dia = date("w");
                $hora_dia = date("H");
                $min_dia = date("i");
                
                
                
                  if(($fecha_dia != $dia_peticion) || ($hora_dia != $hora_peticion) || ($min_dia < $min_i_peticion) || ($min_dia > $min_f_peticion)&&($usuario->estado_usuario != 1)) {
                             
                      header("Location: ".Yii:: app() ->baseUrl.'/site/index');
                      
                  }
                    

        
?>


<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie_1.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset2.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_1.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylesheet.css" />
        
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.countdown.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.custom.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>-->

  
  
  
  


<h3>Toma de turnos</h3>

<?php

    $fecha1 = date ( 'Y-m-d H:i:s' , strtotime("monday next week"));
    $fecha2 = date ( 'Y-m-d H:i:s' , strtotime("sunday next week"));
        
//    $model = UsuariosHasTurnos::model()->findall('usuarios_id_usuario='.Yii::app()->session['var'].' 
//        and estado="Aceptado"');
    
    $model = Yii::app()->db->createCommand("
        select turnos_id_turno
        from usuarios_has_turnos,turnos
        where 
        usuarios_has_turnos.estado = 'Aceptado'
        and usuarios_has_turnos.turnos_id_turno = turnos.id_turno
        and usuarios_has_turnos.usuarios_id_usuario=".Yii::app()->session['var']." 
        and turnos.fecha_turno >= '".$fecha1."' 
        and turnos.fecha_turno < '".$fecha2."';")->queryAll();
 
    $total = 4;
    $i=0;
    foreach($model as $m)
    {
        foreach ($m as $m1) {
            $i++;
        }
    }
    $resto = $total-$i;
    if($resto >0)
    {
        echo "
                    <div class='row-fluid'>
                    <div class='span4'>
                    <div class='alert alert-danger'>
                    <p>Le quedan <b>".($resto)."</b> turnos para tomar esta semana</p>
                    </div>
                    </div>
                    </div>"
                ;
        
        ?>

<div class="span11">
   
    <div class="row planilla-all well">
    <div class="span-2 centrar planilla well_semana"><?php echo $this->renderPartial('_col1'); ?></div>
    <div class="span-2 centrar planilla well_semana"><?php echo $this->renderPartial('_col2'); ?></div>
    <div class="span-2 centrar planilla well_semana"><?php echo $this->renderPartial('_col3'); ?></div>
    <div class="span-2 centrar planilla well_semana"><?php echo $this->renderPartial('_col4'); ?></div>
    <div class="span-2 centrar planilla well_semana"><?php echo $this->renderPartial('_col5'); ?></div>
    <div class="span-2 centrar planilla well_semana"><?php echo $this->renderPartial('_col6'); ?></div>
    <div class="span-2 planilla centrar well_semana"><?php echo $this->renderPartial('_col7'); ?></div>
    </div>    
</div> 
<!--<div id="counter"></div>-->


        <?php
    }
    else 
    {
        echo "<p>No le quedan más turnos para tomar esta semana. Debe esperar para la próxima semana o regalar turnos.</p>";
    }
?>

<?php

            }
      
      if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }
            
  ?>          