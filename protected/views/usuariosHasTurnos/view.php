<?php
/* @var $this UsuariosHasTurnosController */
/* @var $model UsuariosHasTurnos */

$this->breadcrumbs=array(
	'Usuarios Has Turnoses'=>array('index'),
	$model->usuarios_id_usuario,
);

$this->menu=array(
	array('label'=>'List UsuariosHasTurnos', 'url'=>array('index')),
	array('label'=>'Create UsuariosHasTurnos', 'url'=>array('create')),
	array('label'=>'Update UsuariosHasTurnos', 'url'=>array('update', 'id'=>$model->usuarios_id_usuario)),
	array('label'=>'Delete UsuariosHasTurnos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usuarios_id_usuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsuariosHasTurnos', 'url'=>array('admin')),
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
