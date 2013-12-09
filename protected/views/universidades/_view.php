<?php
/* @var $this UniversidadesController */
/* @var $data Universidades */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_univ')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_univ), array('view', 'id'=>$data->id_univ)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_univ')); ?>:</b>
	<?php echo CHtml::encode($data->nom_univ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('univ_web')); ?>:</b>
	<?php echo CHtml::encode($data->univ_web); ?>
	<br />


</div>