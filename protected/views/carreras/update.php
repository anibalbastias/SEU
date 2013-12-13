<?php
/* @var $this CarrerasController */
/* @var $model Carreras */



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
	'Carrerases'=>array('index'),
	$model->id_carrera=>array('view','id'=>$model->id_carrera),
	'Update',
);

$this->menu=array(
	array('label'=>'List Carreras', 'url'=>array('index')),
	array('label'=>'Create Carreras', 'url'=>array('create')),
	array('label'=>'View Carreras', 'url'=>array('view', 'id'=>$model->id_carrera)),
	array('label'=>'Manage Carreras', 'url'=>array('admin')),
);
?>

<h1>Update Carreras <?php echo $model->id_carrera; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); 


}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }






?>