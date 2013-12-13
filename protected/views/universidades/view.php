<?php
/* @var $this UniversidadesController */
/* @var $model Universidades */

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
	'Universidades'=>array('index'),
	$model->id_univ,
);

$this->menu=array(
	array('label'=>'Listar Universidades', 'url'=>array('index')),
	array('label'=>'Crear Universidades', 'url'=>array('create')),
	array('label'=>'Modificar Universidades', 'url'=>array('update', 'id'=>$model->id_univ)),
	array('label'=>'Eliminar Universidades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_univ),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Universidades', 'url'=>array('admin')),
);
?>

<h1>Universidad #<?php echo $model->id_univ; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_univ',
		'nom_univ',
		'univ_web',
	),
));

}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }





?>
