<?php
/* @var $this TurnosController */
/* @var $model Turnos */

$this->breadcrumbs=array(
	'Turnos'=>array('index'),
	$model->id_turno,
);

$this->menu=array(
	array('label'=>'Listar Turnos', 'url'=>array('index')),
	array('label'=>'Crear Turnos', 'url'=>array('create')),
	array('label'=>'Modificar Turnos', 'url'=>array('update', 'id'=>$model->id_turno)),
	array('label'=>'Eliminar Turnos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_turno),'confirm'=>'¿Estas seguro de eliminar este turno?')),
	array('label'=>'Administrar Turnos', 'url'=>array('admin')),
);
?>

<h1>View Turnos #<?php echo $model->id_turno; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_turno',
		'fecha_turno',
		'cupos_turno',
	),
)); ?>
