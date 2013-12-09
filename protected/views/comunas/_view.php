<?php
/* @var $this ComunasController */
/* @var $data Comunas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_comuna')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_comuna), array('view', 'id'=>$data->id_comuna)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provincias_id_provincia')); ?>:</b>
	<?php echo CHtml::encode($data->provincias_id_provincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_comuna')); ?>:</b>
	<?php echo CHtml::encode($data->nom_comuna); ?>
	<br />


</div>