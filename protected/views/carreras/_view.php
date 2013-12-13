<?php
/* @var $this CarrerasController */
/* @var $data Carreras */
?>

<div class="view">
    <div class="well">
	<b><?php echo CHtml::encode($data->getAttributeLabel('carrera')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nom_carrera), array('view', 'id'=>$data->id_carrera)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('universidad')); ?>:</b>
	<?php echo CHtml::encode($data->universidades->nom_univ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />
    </div>

</div>