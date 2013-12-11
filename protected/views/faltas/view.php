<?php
/* @var $this FaltasController */
/* @var $model Faltas */

$this->breadcrumbs=array(
	'Faltases'=>array('index'),
	$model->id_falta,
);

$this->menu=array(
	array('label'=>'List Faltas', 'url'=>array('index')),
	array('label'=>'Create Faltas', 'url'=>array('create')),
	array('label'=>'Update Faltas', 'url'=>array('update', 'id'=>$model->id_falta)),
	array('label'=>'Delete Faltas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_falta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Faltas', 'url'=>array('admin')),
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
