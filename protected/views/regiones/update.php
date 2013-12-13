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
	$model->id_region=>array('view','id'=>$model->id_region),
	'Update',
);

$this->menu=array(
	array('label'=>'List Regiones', 'url'=>array('index')),
	array('label'=>'Create Regiones', 'url'=>array('create')),
	array('label'=>'View Regiones', 'url'=>array('view', 'id'=>$model->id_region)),
	array('label'=>'Manage Regiones', 'url'=>array('admin')),
);
?>

<h1>Update Regiones <?php echo $model->id_region; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model));

}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }



?>