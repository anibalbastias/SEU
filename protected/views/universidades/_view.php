<?php
/* @var $this UniversidadesController */
/* @var $data Universidades */
?>

<div class="view">
    <div class="well">
	<b><?php echo CHtml::encode($data->getAttributeLabel('Universidad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nom_univ), array('view', 'id'=>$data->id_univ)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('univ_web')); ?>:</b>
	<?php echo '<a target="_blank" href="http://'.CHtml::encode($data->univ_web).'">'.CHtml::encode($data->univ_web).'</a>'; ?>
	<br />
    </div>

</div>