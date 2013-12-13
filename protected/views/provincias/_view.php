<?php
/* @var $this ProvinciasController */
/* @var $data Provincias */
?>

<div class="view">
    <div class="well">
	<b><?php echo CHtml::encode($data->getAttributeLabel('provincia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nom_provincia), array('view', 'id'=>$data->id_provincia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('region')); ?>:</b>
	<?php echo CHtml::encode($data->regiones->nom_region); ?>
	<br />
    </div>

</div>