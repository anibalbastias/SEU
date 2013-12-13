<?php
/* @var $this RegionesController */
/* @var $model Regiones */

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
	'Regiones'=>array('index'),
	$model->id_region,
);

$this->menu=array(
	array('label'=>'List Regiones', 'url'=>array('index')),
	array('label'=>'Create Regiones', 'url'=>array('create')),
	array('label'=>'Update Regiones', 'url'=>array('update', 'id'=>$model->id_region)),
	array('label'=>'Delete Regiones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_region),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Regiones', 'url'=>array('admin')),
);
?>

<h1>View Regiones #<?php echo $model->id_region; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_region',
		'nom_region',
	),
));

}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }




?>
