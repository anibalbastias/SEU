<?php
/* @var $this ComunasController */
/* @var $model Comunas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comunas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'provincias_id_provincia'); ?>
		<?php echo $form->textField($model,'provincias_id_provincia',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'provincias_id_provincia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_comuna'); ?>
		<?php echo $form->textField($model,'nom_comuna',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nom_comuna'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->