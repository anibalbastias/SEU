<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php

    if(Yii::app()->session['var'] != NULL)
            {

?> 


<h1>Planilla generada</h1><br>


        <?php
        $model= Turnos::model()->findall(array('order'=>'fecha_turno'));
        if($model)
        {
            foreach($model as $m)
            {
                $m2=  explode(" ", $m->fecha_turno);
                
                ?>
                <div class="well">
                <?php                
                
                $fecha = $m->fecha_turno; //inicializo la fecha con la hora

                $nuevafecha = strtotime ( '+3 hour' , strtotime ( $fecha ) ) ;
                $nuevafecha = strtotime ( '+30 minute' , $nuevafecha ) ; // utilizo "nuevafecha"
                $nuevafecha = date ( 'Y-m-j H:i:s' , $nuevafecha );
                
                $m2_f = explode(" ", $nuevafecha);
                
                echo "<h4>Turno: ".$m2[0]."</h4>";
                echo "<h4>Hora: ".$m2[1]." - ".$m2_f[1]."</h4>";
                echo "<h4>Cupos: ".$m->cupos_turno."</h4>";
                ?>
                
                    
                <?php
                
                
                $model1 = UsuariosHasTurnos::model()->findall('turnos_id_turno='.$m->id_turno);
                
                
                if($model1)
                {
                    $j=1;
                    foreach($model1 as $m2)
                    {
                        $model2 = Usuarios::model()->findall('id_usuario='.$m2->usuarios_id_usuario);
                        foreach($model2 as $m3)
                        {
                            echo $j.". ".$m3->nom_usuario." ".$m3->apel1_usuario." ".$m3->apel2_usuario."<br/>";
                            $j++;
                        }
                    }
                }
                else
                {
                    echo "Sin inscritos<br/>";
                }
                
                    
                
                
                ?>
                </div>
            

            <?php
            }
            
        }
        else
        {
          echo 'No existe el modelo';
        }
?>




<?php

            }
      
      if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }
            
  ?>