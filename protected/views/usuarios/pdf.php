<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<h2 class="centrar">Planilla de Usuarios SEU</h2>



<div class="" style="padding-top: 50px;">
    
   <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
          </tr>
        </thead>   
        <tbody>
<?php $empaque = Usuarios::model()->findAll();

    $i = 1;

    foreach ($empaque as $emp){
        
    
    ?> 
    
<div class="row-fluid">
<div class="span-12 style_user">
           

	<?php // echo $i .".- " .CHtml::encode($emp->nom_usuario." ".$emp->apel1_usuario." ".$emp->apel2_usuario); ?></b>
	<!--<br />-->
       
      
        
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $emp->nom_usuario ?></td>
            <td><?php echo $emp->apel1_usuario?></td>
            <td><?php echo $emp->apel2_usuario ?></td>
          </tr>
        
   
        
        


</div>      
</div>

    <?php
    
       $i++;
    
    }

?>

    
      <!-- ######################################## generacion de pdf ############################-->   
 
      </tbody>
      </table>   
</div>





<br>


