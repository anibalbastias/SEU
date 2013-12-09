<?php
/* @var $this UniversidadesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Universidades',
);

$this->menu=array(
	array('label'=>'Create Universidades', 'url'=>array('create')),
	array('label'=>'Manage Universidades', 'url'=>array('admin')),
);
?>

<h1>Universidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
