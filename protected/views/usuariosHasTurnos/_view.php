<?php
/* @var $this UsuariosHasTurnosController */
/* @var $data UsuariosHasTurnos */
?>

<div class="view">
    <div class="well">
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usuarios->nom_usuario." ".$data->usuarios->apel1_usuario." ".$data->usuarios->apel2_usuario), array('view', 'id'=>$data->usuarios_id_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('turno')); ?>:</b>
	<?php echo CHtml::encode($data->turnos->fecha_turno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />
    </div>

</div>