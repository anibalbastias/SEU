<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<?php $id = $_GET['id']; ?>
<?php
        $empaque = Usuarios::model()->findByPk($id);
        echo "<h3> Faltas de ".$empaque->nom_usuario." ".$empaque->apel1_usuario." ".$empaque->apel2_usuario."</h3>";
        
        $criteria = new CDbCriteria;
//        $criteria->params = array(':usuarios_id_usuario' => $empaque->id_usuario);
//        $criteria->addCondition("usuarios_id = :usuarios_id");
        
        
        $falta = Faltas::model()->findAll(array("condition"=>"usuarios_id_usuario = $empaque->id_usuario","order"=>"fecha_falta DESC",));
        
        foreach ($falta as $f){
        
      
?>

<div class="well">
    
    <?php echo $f->desc_falta."<br>"; ?>
    <?php echo $f->tipo_falta."<br>"; ?>
    <?php echo $f->fecha_falta."<br>"; ?>
    
</div>  


<?php } ?>