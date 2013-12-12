<?php
/* @var $this FaltasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faltas',
);

$this->menu=array(
	array('label'=>'Crear Faltas', 'url'=>array('create')),
	array('label'=>'Administrar Faltas', 'url'=>array('admin')),
);
?>

<h1>Faltases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
