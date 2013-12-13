<?php

    if(Yii::app()->session['var'] != NULL)
            {

?>  



<h1>Panel de administracion</h1>


<div class="well">

    <h2> Usuarios </h2>

    <li><a href="<?php echo Yii:: app() ->baseUrl.'/usuarios/index' ?>">Listar usuarios</a></li>
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/usuarios/create' ?>">Crear usuarios</a></li>
    <!--<li><a href="<?php echo Yii:: app() ->baseUrl.'/site/admin' ?>">Eliminar usuario</a></li>-->
    
</div>


<div class="well">
    
    <h2>Planilla</h2>
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/admin' ?>">Listar turnos</a></li>
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/turnos/create' ?>">Crear turnos</a></li>
    <!--<li><a href="<?php echo Yii:: app() ->baseUrl.'/site/admin' ?>">Eliminar turnos</a></li>-->
    
</div>   



<?php

            }
      
      if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }
            
  ?>