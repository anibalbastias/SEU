<?php
/* @var $this CarrerasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Carreras',
);

$this->menu=array(
	array('label'=>'Crear Carreras', 'url'=>array('create')),
	array('label'=>'Administrar Carreras', 'url'=>array('admin')),
);
?>

<h1>Carreras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
