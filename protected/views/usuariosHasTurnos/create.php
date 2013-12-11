<?php
/* @var $this UsuariosHasTurnosController */
/* @var $model UsuariosHasTurnos */

$this->breadcrumbs=array(
	'Usuarios Has Turnoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsuariosHasTurnos', 'url'=>array('index')),
	array('label'=>'Manage UsuariosHasTurnos', 'url'=>array('admin')),
);
?>

<h1>Create UsuariosHasTurnos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>