<?php
/* @var $this FaltasController */
/* @var $model Faltas */

$this->breadcrumbs=array(
	'Faltas'=>array('index'),
	$model->id_falta,
);

$this->menu=array(
	array('label'=>'Listar Faltas', 'url'=>array('index')),
	array('label'=>'Crear Faltas', 'url'=>array('create')),
	array('label'=>'Modificar Faltas', 'url'=>array('update', 'id'=>$model->id_falta)),
	array('label'=>'Eliminar Faltas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_falta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Faltas', 'url'=>array('admin')),
);
?>

<h1>View Faltas #<?php echo $model->id_falta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_falta',
		'usuarios_id_usuario',
		'desc_falta',
		'tipo_falta',
		'fecha_falta',
	),
)); ?>
