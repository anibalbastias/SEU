<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'carreras_id_carrera'); ?>
		<?php echo $form->textField($model,'carreras_id_carrera',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'carreras_id_carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comunas_id_comuna'); ?>
		<?php echo $form->textField($model,'comunas_id_comuna',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'comunas_id_comuna'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_usuario'); ?>
		<?php echo $form->textField($model,'nom_usuario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nom_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apel1_usuario'); ?>
		<?php echo $form->textField($model,'apel1_usuario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apel1_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apel2_usuario'); ?>
		<?php echo $form->textField($model,'apel2_usuario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apel2_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rut_usuario'); ?>
		<?php echo $form->textField($model,'rut_usuario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'rut_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dir_usuario'); ?>
		<?php echo $form->textField($model,'dir_usuario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dir_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_usuario'); ?>
		<?php echo $form->textField($model,'email_usuario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cel_usuario'); ?>
		<?php echo $form->textField($model,'cel_usuario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cel_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estudios_usuario'); ?>
		<?php echo $form->textField($model,'estudios_usuario'); ?>
		<?php echo $form->error($model,'estudios_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fnac_usuario'); ?>
		<?php echo $form->textField($model,'fnac_usuario'); ?>
		<?php echo $form->error($model,'fnac_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero_usuario'); ?>
		<?php echo $form->textField($model,'genero_usuario'); ?>
		<?php echo $form->error($model,'genero_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hijos_usuario'); ?>
		<?php echo $form->textField($model,'hijos_usuario',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hijos_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pass_usuario'); ?>
		<?php echo $form->textField($model,'pass_usuario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pass_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->