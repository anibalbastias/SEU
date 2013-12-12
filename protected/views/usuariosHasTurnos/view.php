<?php
/* @var $this UsuariosHasTurnosController */
/* @var $model UsuariosHasTurnos */

$this->breadcrumbs=array(
	'Turnos de Usuarios'=>array('index'),
	$model->usuarios_id_usuario,
);

$this->menu=array(
	array('label'=>'Listar Turnos de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Turnos de Usuarios', 'url'=>array('create')),
	array('label'=>'Modificar Turnos de Usuarios', 'url'=>array('update', 'id'=>$model->usuarios_id_usuario)),
	array('label'=>'Eliminar Turnos de Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usuarios_id_usuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Turnos de Usuarios', 'url'=>array('admin')),
);
?>

<h1>View UsuariosHasTurnos #<?php echo $model->usuarios_id_usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'usuarios_id_usuario',
		'turnos_id_turno',
		'estado',
	),
)); ?>
