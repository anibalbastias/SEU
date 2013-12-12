<?php
/* @var $this UsuariosHasTurnosController */
/* @var $model UsuariosHasTurnos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-has-turnos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarios_id_usuario'); ?>
		<?php echo $form->textField($model,'usuarios_id_usuario',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usuarios_id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'turnos_id_turno'); ?>
		<?php echo $form->textField($model,'turnos_id_turno',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'turnos_id_turno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->