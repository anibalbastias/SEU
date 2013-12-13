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

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->labelEx($model,'fecha_turno'); ?>
		<?php 
                    $this->widget(
                        'ext.jui.EJuiDateTimePicker',
                        array(
                            'model'     => $model,
                            'attribute' => 'fecha_turno',
                            'language'=> 'es',
                            'mode'    => 'datetime',
                            'options'   => array(
                                'dateFormat' => 'yy-mm-dd',
                                'timeFormat' => 'HH:mm:00',
                                'hourMin' => 8,
                                'hourMax' => 19,
                                "minDate" => "-0Y",
                                "maxDate" => "+1Y",
                            ),
                        )
                    );

                ?>
		<?php echo $form->error($model,'fecha_turno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cupos_turno'); ?>
		<?php echo $form->textField($model,'cupos_turno',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cupos_turno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Turno' : 'Guardar Turno'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->