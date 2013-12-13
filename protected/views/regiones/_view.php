<?php
/* @var $this RegionesController */
/* @var $data Regiones */
?>

<div class="view">
    <div class="well">
	<b><?php echo CHtml::encode($data->getAttributeLabel('region')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nom_region), array('view', 'id'=>$data->id_region)); ?>
	<br />
    </div>

</div>