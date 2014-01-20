
<?php 

        if(Yii::app()->session['var'] != NULL)
            {
?>

<div class="well">
    <h1>Página de inicio</h1>
</div>



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
  
<div class=" inicio centrar">

    <div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
<h1><b>Ingreso al Sistema</b></h1>
<br><br>
        </div>
<div class="row-fluid">
    
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
          <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/quienes' ?>">Quienés Somos</a></li>

          <li><a href="<?php echo Yii:: app() ->baseUrl.'#' ?>">Eventos</a></li>
          <li><a href="<?php echo Yii:: app() ->baseUrl.'#' ?>">Fotos</a></li>
          
        </ul>
      
      
        <ul class="nav nav-tabs nav-stacked">
    
              <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/' ?>">Entrar</a></li>
              <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/contact/' ?>">Postulacion</a></li>
          
        </ul>
      
      
</div>  
    
    <div class="span2">
        
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