
<?php 

        if(Yii::app()->session['var'] != NULL)
            {
            
         $usuario=Usuarios::model()->findByPk(Yii::app()->session['var']);   
?>

        <!-- #################### cuerpo  #######################--> 


        <h3><u> Bienvenido <?php echo $usuario->nom_usuario;  ?></u> </h3>    

        <!-- #####################  toma de turnos  ###################--> 
        <div class="well">
            <h3>Toma de turnos: Jueves - 23:00 hrs</h3>
            
          <!-- ############## reloj ################3-->
        
          <?php // echo date('w'); ?>
            
<!--          <script>
            
                var V = "<?php echo date('w'); ?>";
            
                alert(V);
          </script>  -->
          
          <!-- ############# fin del reloj ############### -->
        </div>    
            
        <h3><u>Turnos de la semana</u></h3>

        <?php $empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);  ?>



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
 
            
       <!-- #############   faltas que tiene el usuario  ################-->
            
        <h3><u>Últimas faltas </u></h3>

            <?php
                
             
                $criteria = new CDbCriteria; 
        
                $falta = Faltas::model()->findAll(array("condition"=>"usuarios_id_usuario = $usuario->id_usuario","order"=>"fecha_falta DESC",));
        
         
                
                foreach ($falta as $f){
        
      
                ?>

                    <div class="well">
    
                         <?php echo "<b>Nombre:</b> ".$f->desc_falta."<br>"; ?>
                         <?php echo "<b>Tipo: </b>".$f->tipo_falta."<br>"; ?>
                         <?php echo "<b>Fecha: </b>".$f->fecha_falta."<br>"; ?>
                         
                    </div>  


                <?php } ?>



   <!-- ##############  turnos para tomar ##################### -->
        <h3><u>Turnos para tomar</u></h3>
        
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
        echo "<p>Le quedan <b>".($resto)."</b> turnos para tomar esta semana</p>";
        
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



        
        <!-- #################### fin cuerpo ################### -->
        
        
        
        
    
        
        
    <?php

        $admin=Usuarios::model()->findByPk(Yii::app()->session['var']);
    
       if($admin->rut_usuario =='admin'){ 
         $this->redirect(array('admin'));
       }    
      
        
    ?>



  <!--fuera de la sesion ###############################-->

<?php 
            }
            
            if(Yii::app()->session['var'] == NULL)
            {

?>

  <div class="">
  
<div class="inicio centrar">

    <div class="">
    <div class="row-fluid">
        <div class="span12 title_index">
<h1><b>Servicios de Empaques Universitarios</b></h1>
<br><br>
        </div>
<div class="row-fluid" >
    
    <div style="margin-top: 60px; padding-bottom: 50px;">
    <div class="span2"> 
        
        
        
    </div>
    
  <!-- ############### formulario de entrada  ###############-->  
    
<div class="span5">
<div class="form form_ini">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	

	<div class="">
		<?php echo $form->labelEx($model,'Rut',array('class'=>'required')); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	<div class=" rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

    <br>
	<div class=" buttons">
		<?php echo CHtml::submitButton('Iniciar Sesion',array('class'=>'btn btn-primary btn-large')); ?>

        </div>
</div>    
</div>
    
<!--    <div class="span2 well">
        
    </div>-->
    
    
    <!-- ###################### formulario de contacto  ###################-->
    
    <div class="span1">
        
    </div>  
    
  <div class="span2">
      
    
      
      <ul class="nav nav-tabs nav-stacked">

          <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/' ?>">Inicio</a></li>
          <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/empresa' ?>">Empresa</a></li>
          <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/quienes' ?>">Quienes Somos</a></li>

          <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/fotos' ?>">Fotos</a></li>
          
        </ul>
      
      
        <ul class="nav nav-tabs nav-stacked">
    
              <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/' ?>">Entrar</a></li>
              <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/contact' ?>">Postulacion</a></li>
          
        </ul>
      
      
</div>  
    
    <div class="span2">
        
    </div>
    
    
        </div> 
    </div>  
</div>
    </div>
</div>
  </div>     
<?php $this->endWidget(); ?>
<!-- form -->

<?php
            }
?>