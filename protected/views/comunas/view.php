<?php
/* @var $this ComunasController */
/* @var $model Comunas */

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
	'Comunases'=>array('index'),
	$model->id_comuna,
);

$this->menu=array(
	array('label'=>'List Comunas', 'url'=>array('index')),
	array('label'=>'Create Comunas', 'url'=>array('create')),
	array('label'=>'Update Comunas', 'url'=>array('update', 'id'=>$model->id_comuna)),
	array('label'=>'Delete Comunas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_comuna),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comunas', 'url'=>array('admin')),
);
?>

<h1>View Comunas #<?php echo $model->id_comuna; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_comuna',
		'provincias_id_provincia',
		'nom_comuna',
	),
));


}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }





?>
