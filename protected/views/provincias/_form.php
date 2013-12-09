<?php
/* @var $this ProvinciasController */
/* @var $model Provincias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'provincias-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'regiones_id_region'); ?>
		<?php echo $form->textField($model,'regiones_id_region',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'regiones_id_region'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_provincia'); ?>
		<?php echo $form->textField($model,'nom_provincia',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nom_provincia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->