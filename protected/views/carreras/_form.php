<?php
/* @var $this CarrerasController */
/* @var $model Carreras */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carreras-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'universidades_id_univ'); ?>
		<?php echo $form->textField($model,'universidades_id_univ',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'universidades_id_univ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_carrera'); ?>
		<?php echo $form->textField($model,'nom_carrera',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nom_carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->