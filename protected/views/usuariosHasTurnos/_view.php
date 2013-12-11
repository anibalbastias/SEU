<?php
/* @var $this UsuariosHasTurnosController */
/* @var $data UsuariosHasTurnos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarios_id_usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usuarios_id_usuario), array('view', 'id'=>$data->usuarios_id_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('turnos_id_turno')); ?>:</b>
	<?php echo CHtml::encode($data->turnos_id_turno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>