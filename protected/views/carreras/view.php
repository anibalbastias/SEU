<?php
/* @var $this CarrerasController */
/* @var $model Carreras */

$this->breadcrumbs=array(
	'Carrerases'=>array('index'),
	$model->id_carrera,
);

$this->menu=array(
	array('label'=>'List Carreras', 'url'=>array('index')),
	array('label'=>'Create Carreras', 'url'=>array('create')),
	array('label'=>'Update Carreras', 'url'=>array('update', 'id'=>$model->id_carrera)),
	array('label'=>'Delete Carreras', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_carrera),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Carreras', 'url'=>array('admin')),
);
?>

<h1>View Carreras #<?php echo $model->id_carrera; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_carrera',
		'universidades_id_univ',
		'nom_carrera',
		'tipo',
	),
)); ?>
