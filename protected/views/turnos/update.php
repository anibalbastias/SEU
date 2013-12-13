<?php
/* @var $this TurnosController */
/* @var $model Turnos */

if(Yii::app()->session['var'] != NULL)
{
    $usuario=Usuarios::model()->findByPk(Yii::app()->session['var']);
    
    if( $usuario->rut_usuario != 'admin') 
       {
    
        header("Location: ".Yii:: app() ->baseUrl.'/site/index');
        
       }
    
    if( $usuario->rut_usuario == 'admin') 
       {
    




$this->breadcrumbs=array(
	'Turnos'=>array('index'),
	$model->id_turno=>array('view','id'=>$model->id_turno),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Turnos', 'url'=>array('index')),
	array('label'=>'Crear Turnos', 'url'=>array('create')),
	array('label'=>'Ver Turnos', 'url'=>array('view', 'id'=>$model->id_turno)),
	array('label'=>'Administrar Turnos', 'url'=>array('admin')),
);
?>

<h1>Update Turnos <?php echo $model->id_turno; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); 

}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }



?>