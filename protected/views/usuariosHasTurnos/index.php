<?php
/* @var $this UsuariosHasTurnosController */
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
	'Turnos de Usuarios',
);

$this->menu=array(
	array('label'=>'Crear Turnos de Usuarios', 'url'=>array('create')),
	array('label'=>'Administrar Turnos de Usuarios', 'url'=>array('admin')),
);
?>

<h1>Turnos de Usuarios</h1>

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
