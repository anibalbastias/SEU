
<?php 

        if(Yii::app()->session['var'] != NULL)
            {
?>

<div class="well">
    <h1>Página de inicio</h1>
</div>


<?php


   
// store session data
//   echo  $_SESSION['user'];
    echo Yii::app()->session['var']; // Prints "value"

?>



<?php 
            }
            
            if(Yii::app()->session['var'] == NULL)
            {

?>

<div class="inicio centrar">

<h1>Ingreso a SEU</h1>



<div class="form">
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

	<div class=" buttons">
		<?php echo CHtml::submitButton('Iniciar Sesion',array('class'=>'btn')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>
</div><!-- form -->

<?php
            }
?>