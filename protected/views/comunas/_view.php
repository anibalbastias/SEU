<?php
/* @var $this ComunasController */
/* @var $data Comunas */
?>

<div class="view">
    <div class="well">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_comuna')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nom_comuna), array('view', 'id'=>$data->id_comuna)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provincias_id_provincia')); ?>:</b>
	<?php echo CHtml::encode($data->provincias->nom_provincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('region')); ?>:</b>
	<?php echo CHtml::encode($data->provincias->regiones->nom_region); ?>
	<br />
    </div>

</div>