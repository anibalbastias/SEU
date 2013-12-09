<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carreras_id_carrera'); ?>
		<?php echo $form->textField($model,'carreras_id_carrera',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comunas_id_comuna'); ?>
		<?php echo $form->textField($model,'comunas_id_comuna',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_usuario'); ?>
		<?php echo $form->textField($model,'nom_usuario',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apel1_usuario'); ?>
		<?php echo $form->textField($model,'apel1_usuario',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apel2_usuario'); ?>
		<?php echo $form->textField($model,'apel2_usuario',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rut_usuario'); ?>
		<?php echo $form->textField($model,'rut_usuario',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dir_usuario'); ?>
		<?php echo $form->textField($model,'dir_usuario',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_usuario'); ?>
		<?php echo $form->textField($model,'email_usuario',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cel_usuario'); ?>
		<?php echo $form->textField($model,'cel_usuario',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estudios_usuario'); ?>
		<?php echo $form->textField($model,'estudios_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fnac_usuario'); ?>
		<?php echo $form->textField($model,'fnac_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genero_usuario'); ?>
		<?php echo $form->textField($model,'genero_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hijos_usuario'); ?>
		<?php echo $form->textField($model,'hijos_usuario',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pass_usuario'); ?>
		<?php echo $form->textField($model,'pass_usuario',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->