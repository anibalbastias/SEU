<?php
/* @var $this TurnosController */
/* @var $model Turnos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_turno'); ?>
		<?php echo $form->textField($model,'id_turno',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_turno'); ?>
		<?php echo $form->textField($model,'fecha_turno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cupos_turno'); ?>
		<?php echo $form->textField($model,'cupos_turno',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar Turno'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->