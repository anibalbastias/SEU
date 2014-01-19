
<?php 

        if(Yii::app()->session['var'] != NULL)
            {
?>

<div class="well">
    <h1>Página de inicio</h1>
</div>

<script>

var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var f=new Date();
document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());


</script>



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
    
    <div class="span4"> 
        
    </div>
<div class="span4 ">
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
    
    <div class="span4">
        
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