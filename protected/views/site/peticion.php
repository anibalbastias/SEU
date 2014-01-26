
<?php

    if(Yii::app()->session['var'] != NULL)
            {

        date_default_timezone_set("Chile/Continental");
       

        
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
    $model = UsuariosHasTurnos::model()->findall('usuarios_id_usuario='.Yii::app()->session['var'].' and estado="Aceptado"');
    $total = 4;
    $i=0;
    foreach($model as $m)
    {
        $i++;
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