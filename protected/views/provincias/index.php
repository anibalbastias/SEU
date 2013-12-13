<?php
/* @var $this ProvinciasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Provincias',
);

$this->menu=array(
	array('label'=>'Crear Provincias', 'url'=>array('create')),
	array('label'=>'Administrar Provincias', 'url'=>array('admin')),
);
?>

<h1>Provincias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
