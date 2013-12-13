<?php
/* @var $this UniversidadesController */
/* @var $dataProvider CActiveDataProvider */


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
	'Universidades',
);

$this->menu=array(
	array('label'=>'Create Universidades', 'url'=>array('create')),
	array('label'=>'Manage Universidades', 'url'=>array('admin')),
);
?>

<h1>Universidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 


      }
       
       }     

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }


?>
