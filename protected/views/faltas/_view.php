<?php
/* @var $this FaltasController */
/* @var $data Faltas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_falta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_falta), array('view', 'id'=>$data->id_falta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarios_id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuarios_id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc_falta')); ?>:</b>
	<?php echo CHtml::encode($data->desc_falta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_falta')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_falta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_falta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_falta); ?>
	<br />


</div>