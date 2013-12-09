<?php
/* @var $this RegionesController */
/* @var $data Regiones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_region')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_region), array('view', 'id'=>$data->id_region)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_region')); ?>:</b>
	<?php echo CHtml::encode($data->nom_region); ?>
	<br />


</div>