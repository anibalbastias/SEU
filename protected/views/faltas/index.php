<?php
/* @var $this FaltasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faltases',
);

$this->menu=array(
	array('label'=>'Create Faltas', 'url'=>array('create')),
	array('label'=>'Manage Faltas', 'url'=>array('admin')),
);
?>

<h1>Faltases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
