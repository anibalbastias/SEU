<?php
/* @var $this CarrerasController */
/* @var $data Carreras */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_carrera')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_carrera), array('view', 'id'=>$data->id_carrera)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('universidades_id_univ')); ?>:</b>
	<?php echo CHtml::encode($data->universidades_id_univ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_carrera')); ?>:</b>
	<?php echo CHtml::encode($data->nom_carrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />


</div>