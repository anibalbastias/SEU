<?php
/* @var $this UsuariosHasTurnosController */
/* @var $model UsuariosHasTurnos */

$this->breadcrumbs=array(
	'Turnos de Usuarios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Turnos de Usuarios', 'url'=>array('index')),
	array('label'=>'Administrar Turnos de Usuario', 'url'=>array('admin')),
);
?>

<h1>Crear Turno de Usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>