<?php
/* @var $this TurnosController */
/* @var $model Turnos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'turnos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_turno'); ?>
		<?php echo $form->textField($model,'fecha_turno'); ?>
		<?php echo $form->error($model,'fecha_turno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cupos_turno'); ?>
		<?php echo $form->textField($model,'cupos_turno',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cupos_turno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->