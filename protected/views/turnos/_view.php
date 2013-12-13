<?php
/* @var $this TurnosController */
/* @var $data Turnos */
?>

<div class="view">
    <div class="well">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_turno')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fecha_turno), array('view', 'id'=>$data->id_turno)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cupos_turno')); ?>:</b>
	<?php echo CHtml::encode($data->cupos_turno); ?>
	<br />
    </div>
        


</div>