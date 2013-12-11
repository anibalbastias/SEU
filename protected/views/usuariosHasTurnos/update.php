<?php
/* @var $this UsuariosHasTurnosController */
/* @var $model UsuariosHasTurnos */

$this->breadcrumbs=array(
	'Usuarios Has Turnoses'=>array('index'),
	$model->usuarios_id_usuario=>array('view','id'=>$model->usuarios_id_usuario),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsuariosHasTurnos', 'url'=>array('index')),
	array('label'=>'Create UsuariosHasTurnos', 'url'=>array('create')),
	array('label'=>'View UsuariosHasTurnos', 'url'=>array('view', 'id'=>$model->usuarios_id_usuario)),
	array('label'=>'Manage UsuariosHasTurnos', 'url'=>array('admin')),
);
?>

<h1>Update UsuariosHasTurnos <?php echo $model->usuarios_id_usuario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>