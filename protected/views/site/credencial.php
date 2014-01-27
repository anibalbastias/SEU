<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

 <img class="img-rounded" src="<?php echo Yii:: app() ->baseUrl.'/img/credencial2.png' ?>">
 
 
 <?php 
 
    $usuario = Usuarios::model()->findByPk(Yii::app()->session['var']);
//    echo $usuario->nom_usuario;
    
    echo CHtml::image(Yii::app()->request->baseUrl.'/img/users/'.$usuario->id_usuario.".jpg","id_usuario",array("width"=>165));
 
 
 
 ?>

 <br>
 
 <div class="credencial_all">
        <?php echo "<div class='id_credencial'>".$usuario->id_usuario."</div> "; ?>
        <?php echo "<div class='nombre_credencial'>".$usuario->nom_usuario." ".$usuario->apel1_usuario."</div>"; ?>
	<?php echo "<div class='carrera_credencial'>".$usuario->carreras->nom_carrera."</div> "; ?>
 </div>	