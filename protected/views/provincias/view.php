<?php
/* @var $this ProvinciasController */
/* @var $model Provincias */

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
	'Provinciases'=>array('index'),
	$model->id_provincia,
);

$this->menu=array(
	array('label'=>'List Provincias', 'url'=>array('index')),
	array('label'=>'Create Provincias', 'url'=>array('create')),
	array('label'=>'Update Provincias', 'url'=>array('update', 'id'=>$model->id_provincia)),
	array('label'=>'Delete Provincias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_provincia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Provincias', 'url'=>array('admin')),
);
?>

<h1>View Provincias #<?php echo $model->id_provincia; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_provincia',
		'regiones_id_region',
		'nom_provincia',
	),
));


}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }




?>
