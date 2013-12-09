<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_usuario), array('view', 'id'=>$data->id_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carreras_id_carrera')); ?>:</b>
	<?php echo CHtml::encode($data->carreras_id_carrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comunas_id_comuna')); ?>:</b>
	<?php echo CHtml::encode($data->comunas_id_comuna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nom_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apel1_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->apel1_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apel2_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->apel2_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->rut_usuario); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dir_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->dir_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->email_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cel_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->cel_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estudios_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->estudios_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fnac_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->fnac_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->genero_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hijos_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->hijos_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pass_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->pass_usuario); ?>
	<br />

	*/ ?>

</div>