<?php

    $controlador = $this->getId();
    $pagina = $this->getAction()->getId(); 
 
    if(Yii::app()->session['var'] != NULL)
    {
 
     
?>  


    <div class="style_user">
        
    <div class="">
         
            
    <h3 class="">Perfil    
   <?php 
            $empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);
           $nombre=$empaque->nom_usuario;
           $apellido=$empaque->apel1_usuario;
    
            echo $nombre." ".$apellido;  
        
     
    ?>
    </h3>
    </div>
        
    <div class="">    
    <div class="row-fluid">    
       <div class="span3">    
    
                
                <?php
                
                if($empaque->img_usuario == "1")
                {
                    echo CHtml::image(Yii::app()->request->baseUrl.'/img/users/'.$empaque->id_usuario.".jpg","id_usuario",array("width"=>176));
                }
                else
                {
                    echo CHtml::image(Yii::app()->request->baseUrl.'/img/users/gen.png',"id_usuario",array("width"=>176));
                }
                
//                echo $empaque->img_usuario;
                
                ?>
                
                
            </div>
        
        <div class="span9">
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('rut')); ?>:</b>
	<?php echo $empaque->rut_usuario; ?>
	
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('nom_usuario')); ?>:</b>
	<?php echo CHtml::encode($empaque->nom_usuario." ".$empaque->apel1_usuario." ".$empaque->apel2_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($empaque->getAttributeLabel('carrera')); ?>:</b>
	<?php echo $empaque->carreras->nom_carrera; ?>
	<br />
        
        <!--<b><?php // echo CHtml::encode($empaque->getAttributeLabel('universidad')); ?>:</b>-->
	<?php // echo $empaque->carreras->universidades->nom_univ; ?>
	<!--<br />-->

        <b><?php echo CHtml::encode($empaque->getAttributeLabel('comuna')); ?>:</b>
	<?php echo $empaque->comunas->nom_comuna; ?>
	<br />
	
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('provincia')); ?>:</b>
	<?php echo CHtml::encode($empaque->comunas->provincias->nom_provincia); ?>
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('region')); ?>:</b>
	<?php echo CHtml::encode($empaque->comunas->provincias->regiones->nom_region); ?>
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('celular')); ?>:</b>
	<?php echo $empaque->cel_usuario; ?>
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('email')); ?>:</b>
	<?php echo $empaque->email_usuario; ?>
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('estudios')); ?>:</b>
	<?php if($empaque->estudios_usuario == 1){
        
                    echo "Si";
            
               }
               else{
                   echo "No";
               }
               ;
             ?>
	<br />

        <b><?php echo CHtml::encode($empaque->getAttributeLabel('hijos')); ?>:</b>
	<?php echo $empaque->hijos_usuario; ?>
	<br />
        
        <br><br>
        
        <div type="button" class="btn btn-primary">
                <a href="<?php echo Yii:: app() ->baseUrl.'/site/mperfil' ?>">Modificar datos</a>
        </div>
        
        <div type="button" class="btn btn-success">
                
                <a target="_blank" href="<?php echo Yii:: app() ->baseUrl.'/site/credencial'?> "> Descargar Credencial</a>

        </div>
        
       
        <!-- ############## reglamento  ##########################--> 
        
        <!-- Button to trigger modal -->
            <a href="#myModal" role="button" class="btn btn-warning" data-toggle="modal">Reglamento</a>
 
        <!-- Modal -->
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <div type="button" class="close" data-dismiss="modal" aria-hidden="true">×</div>
                <h4 id="myModalLabel">Reglamento - Servicio de Empaques Universitarios</h4>
            </div>
            <div class="modal-body">
                
                <h4><b><u>INSTRUCTIVO INTERNO DE EMPAQUES SEU</u></b></h4> 
                <br>
              <p>
                Con el objeto de controlar conductas y situaciones que pueden perjudicar a uno o todo el grupo de empaquetadores universitarios se ha elaborado este Reglamento Interno.
              </p>
              <p>
                Dispondremos de un Encargado de Turno que será la persona que organizará, mantendrá y fiscalizará el correcto desempeño de los empaques en sus labores en el supermercado.     
              </p>
              <p>
                Cualquier joven que se desempeñe como empaque, tenga disponibilidad horaria y se destaque por su responsabilidad, compromiso y liderazgo, entre otras cualidades, podrá optar al cargo de Encargado de Turno.
              </p>

              <br>
              <h5><b><u>INSTRUCCIONES BÁSICAS:</u></b></h5>
              <br>
              
              <p><li>
                Es obligación de cada empaque tomar conocimiento del reglamento y ponerlo en práctica, 
                al momento de ser merecedor de una falta no se aceptara una escusa como “yo no sabía” ya que 
                para evitar esto se pone a disposición de cada uno el reglamento y sus modificaciones.
              </li>
                </p>
              <p><li>
                Es obligación ocuparse de la reposición y ordenamiento de las bolsas, sacos y papeles 
                para envolver que se encuentran en el local a nuestra disposición.
              </li>   </p>
              <p><li>
                No pueden comer mientras trabajan (Pueden hacerlo afuera del local). 
                Ni siquiera pueden tener un dulce en la boca, ni mucho menos mascar chicle.
              </li>    </p>
              <p><li>
                No pueden conversar en las cajas mientras estén empacando. 
              </li></p> 
              <p><li>
              No se puede conversar con los cajeros mientras estos trabajan.
              </li></p>
              <p><li>
                Si quieren hablar por teléfono deben hacerlo afuera, jamás en las cajas ni en los alrededores. 
                Siempre con autorización del encargado de turno.
              </li></p> 
              <p><li>
                Pedir autorización al encargado de turno para cambiar monedas, ir al baño, salir del local,
                o cualquier otra que sea razón para ausentarse momentáneamente de sus labores.
              </li></p>  
              <p><li>
              No pueden estar gritando en los pasillos del supermercado, ni tampoco pueden decir 
              palabras grotescas. 
              </li></p>
              <p><li>
              No pueden dar bolsas de más. Sólo lo justo y necesario. No se regalan bolsas a personas 
              que no hayan comprado o se presenten sin boleta del local.
              </li></p>
              <p><li>
              No se puede entrar a comprar con la vestimenta del trabajo. 
              </li></p>
              <p><li>
              No deben permanecer en la fila con bolsas en la mano.
              </li></p>
              <p><li>
              No lanzarse material de trabajo como bolsas, cinta adhesiva, etc…
              </li></p>
              <p><li>
              El uso de la credencial identificadora es obligatorio.
              </li></p>

              <br>
              <h5><b><u> I.- DERECHOS</u> </b></h5>

              <br>

              Los empaques universitarios tienen derecho a:<br><br>

        <p>      
            <b>1.</b>	Un sistema de Toma de Turnos democrático, al cual pueden optar a un máximo de cuatro turnos semanales de 
        tres horas y media.
        </p>
        <p>
        <b>2.</b>	Realizar su labor en la caja, la cual por fuerza mayor se podría compartir con otro universitario. 
        Esto va  depender del flujo de gente que tenga el supermercado a tales horas, y de la cantidad de cajas 
        abiertas que  se mantengan para el público.
        </p>
        <p>
        <b>3.</b>	Enviar un reemplazante (compañero del sistema) en caso de no poder asistir a un turno.
        </p>
        <p>
        <b>4.</b>	Justificar inasistencia sólo con certificado médico hasta 48 horas posterior a la falta.
        </p>
        <p>
        <b>5.</b>	Informarse de sus acumulaciones de faltas.
        </p>
        <p>
        <b>6.</b>	Dar a conocer observaciones y comentarios a los encargados de turno y de local, en un marco de 
        respeto y confianza.
        </p>
        <p>
        <b>7.</b>	Que las observaciones, objeciones o recomendaciones respecto al desempeño de los encargados 
        de turnos, se dirijan directamente al organizador de empaques, el cual garantiza privacidad si es que 
        así lo requieren el empaquetador o la situación.
        </p>

        <br>
        <h5><b><u>II.- OBLIGACIONES</u></b></h5>

        Los empaques universitarios tienen obligaciones de:<br><br>

        Generales:<br><br>

        <p>
            <b>1.</b>	Puntualidad, presentación e higiene personal acorde  con la calidad de estudiante universitario.
        </p>
        <p>
        <b>2.</b>	Avisar de cualquier situación anómala o de conflicto al Encargado de Turno.
        </p>
        <p>
        <b>3.</b>	Cooperación y respeto, en el ámbito de sus funciones, con el Encargado  de Turno, y los demás 
        trabajadores del supermercado.
        </p>
        <p>
        <b>4.</b>	Prestar un servicio de calidad y de respeto acorde al marco cultural del estudiante universitario.
        </p>
        <p>
        <b>5.</b>	Un trato de respeto, compañerismo y camaradería con sus compañeras y compañeros de trabajo.
        </p>
        <p>
        <b>6.</b>	Uso obligatorio del uniforme (Polera, pantalón de tela negro, zapatos y credenciales). 
        </p>
        <p>
        <b>7.</b>	Si pierde mercadería o le produce un daño, y  no es reconocido como error del cliente, 
        debe cancelar el producto.
        </p>
        
        <br> 
        <h5><b><u>Específicas:</u></b></h5>
        
        Presentación Personal:<br> 

        <p><li>
        Hombres: Pelo corto, afeitados, SIN aros, pulsera, ni ningún accesorio de este tipo. Zapatos negros, pantalón de tela negro. Los tatuajes deben ocultarse.
        </li></p>
        <p><li>
        Mujeres: Pelo tomado, ordenado, sin pelos sueltos, con cole oscuro; zapatos negros cerrados; pantalón de tela negro; SIN piercing en las orejas ni menos en la nariz. El aro puede que ser una perla o una argolla, nada más.
        No se pueden pintar las uñas. Solo pueden usar esmalte transparente.
        </li></p>
        <p><li>
        Tanto hombres como mujeres deben usar ropa blanca o negra bajo la polera. Nada colorido. En caso de usar manga larga, debe ser solamente negro.
        </li></p>
        <p><li>
        Pueden usar un banano negro.
        </li></p>
        <b>*Quienes no cumplan con estos requisitos serán devueltos a la casa y no podrán trabajar*.</b>

        <br>
        <br>    
        <h5><b><u>III.- SISTEMA DE SANCIONES</u></b></h5>

        <br>
        Sobre las FALTAS:<br><br>

        <p><li>
        DOS Faltas Graves (FG) = EXPULSIÓN  
        </li></p>
        <p><li>
        TRES Faltas Leves (FL) = 1 Grave
        </li></p>
        
        <p><li>
        Se considera Falta Leve: Atraso al turno posterior a los 10 minutos. Retirarse de su turno antes de que termine y sin previa 
        autorización del Encargado. 
        </li></p>
        <p><li>
        Se considera Falta Grave: Inasistencia al turno. Acumulación de tres faltas leves. 
        El atraso en la apertura, sin importar el tiempo. Si llegan 20 minutos tarde quedarán con Falta Grave, 
        y si el Encargado lo estima y cree necesario, podrán trabajar.
        </li></p>
        <p><li>
        Por cada falta grave, sea atraso de más de 20 min., inasistencia o cualquier otra tendrá como sanción 
        una semana sin turnos.
        </li></p>
        <p><li>
        Condicional: La persona que acumula por lo menos 2 faltas graves queda en estado de condicional, 
        el castigo por la condicionalidad son 2 semanas sin turnos propios y/o regalados y 3 meses en estado 
        de condicional. Cualquier falta grave o leve dentro de ese plazo de 3 meses resultara en expulsión. 
        A partir de hoy 16 de Enero de 2013 no se puede caer en condicionalidad por segunda vez.
        Este beneficio es solo para las personas que tengan un historial presentable y no sea considerado una 
        amenaza para el sistema.
        </li></p>
        <p><li>
        Quedará a criterio del Encargado de Turno o del Encargado de Local la calificación que se les dará a 
        las faltas cometidas por desacatos de  INSTRUCCIONES BÁSICAS (Hablar por celular, no reponer y ordenar 
        bolsas, comer chicle, etc.) 
        </li></p>


            <br>

            <b>Sanciones:</b><br><br>
            
        <p><li>Quedar condicional: 2 semanas sin turnos.</li></p>
        <p><li> Inasistencia: 1 semana sin turnos.</li></p>
        <p><li>Inasistencia con certificado: Si no tiene interés por regalar el turno queda 1 semana sin turnos. 
        Si se ve interés por regalarlo y nadie puede hacerlo no hay sanción.
        </li>
        </p>

        <br>

        <b>PARA NO QUEDAR CON FALTA GRAVE POR INASISTENCIA</b>

        <br><br>
        
        <p><li>
        Si no pueden hacer un turno, deben regalarlo para no quedar con Falta Grave. 
       </li></p>
        
       <p><li>
        Una inasistencia se puede justificar presentando certificado médico ORIGINAL Y NO FOTOCOPIAS 
        al encargado de turno y tiene plazo para presentar hasta 48 horas después del inicio del turno
        al que se ausentó. Los certificados fuera de plazo o la presentación de FOTOCOPIA, no serán tomados 
        en cuenta. (El encargado fotocopiara el original para dejar el registro y el original será devuelto 
        al empaque).
        </li></p>
        
        <p><li>
        Si presenta certificado médico no quedará con falta alguna registrada, pero de todas maneras deberá 
        intentar encontrar un reemplazante o deberá dar aviso de la imposibilidad de poder asistir. Si no se 
        ve interés por cubrir el turno y no llama al organizador de empaques para avisar de la situación 
        (aviso con 12 horas de anticipación), será sancionado 1 semana sin turnos.
        </li></p>
        
        <p><li>
        Si llegan 20 minutos tarde quedarán con Falta Grave, y si el Encargado lo estima y cree necesario, 
        podrán trabajar.
        </li></p>
        
            <br>

            <h5><b><u>IV.- APLICABLE A ENCARGADOS DE TURNO</u></b></h5>

            <br>
            
        <p><li>    
        Por no cumplimiento al reglamento, atraso de 10 min a 20 min resultara en falta leve 
        y arriba de los 20 min o inasistencia ser falta grave por lo tanto se quita un turno de 
        Encargado por cada falta grave la semana siguiente a la falta incurrida. Dichas faltas o 
        no cumplimiento podrá ponerlas un encargado que esté realizando turno de empaque o bien un
        empaque mediante reclamo al correo antes mencionado "informaciones.empaques@gmail.com”. 
        Como antes nombramos se espera que este recurso se use con seriedad y objetividad por los empaques. 
        </li></p>
        
        <p><li>
        La acumulación de tres faltas leves dará resultado una falta grave, por cada falta grave 
        se quita un turno de encargado, por acumular tres faltas graves el encargado será evaluado 
        en reunión para determinar su permanencia en el cargo.
        </li></p>
        
        <p><li>
        En turnos de apertura los empaques tienen la facultad de aplicar faltas al encargado por 
        atraso superior a 10 minutos, utilizando el libro para este registro.
        </li></p>
        
        <p><li>
        Es deber y responsabilidad del encargado reponer material para disposición de los empaques 
        (bolsas, sacos, cinta y papel para envolver), de manera oportuna y ordenada, sin delegar esta 
        responsabilidad a los empaques, también es responsabilidad del empaque mantener el orden de dichos 
        materiales.
        </li></p>
        
        <p><li>
        La acumulación de faltas en los encargados resultara en la baja del mismo, pero será evaluado por 
        organizador y encargados en conjunto.
        </li></p>
        

            <br>


            <h5><b><u>V.- EXCLUSIÓN DEL SISTEMA</u></b></h5>

            <br>
            
        Se sancionará con EXCLUSIÓN al empaque que:<br>

        <p><li>
         Acumule DOS Faltas Graves. 
         </li></p>
         <p><li>
         Le falte el respeto a algún  cliente, a algún compañero de funciones o a 
        trabajadores del local en que se desempeñe.
        </li></p>
        <p><li>
         No pida turno alguno por un periodo de dos semanas, se no pide ningún turno 
        para trabajar, quedará automáticamente eliminado del sistema. 
         </li> </p>
        <p><li>
         Realice, promueva o se involucre en cualquier acción que atente contra la integridad del sistema.
         </li></p>
         <p><li>
         Realice o mantenga comportamientos y/o conductas que falten a la norma y al Reglamento Interno, 
        que no sean acorde a lo estipulado. 
        </li></p>
       
        <p><li>
         Todo lo referente a exclusión del sistema, quedara sujeto a evaluación en reunión de encargados.	
         </li></p>
                 
            </div>
            <div class="modal-footer">
                <div type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Cerrar</div>
                
            </div>
            </div>
        
        <!-- ############## fin del reglamento ################-->
        
            <!-- ##############  alerta reglamento ###################-->
        <div class="bs-docs-example" style="padding-top:30px;">
          <div class="alert alert-block alert-error fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Anuncio!</strong> Acuérdese de leer constantemente el reglamento.
          </div>
        </div>
        
            <br>
            
            <img width="5%" class="" src="<?php echo Yii:: app() ->baseUrl.'/img/pdf.png' ?>">
            <a target="_blank" href="<?php echo Yii:: app() ->baseUrl.'/file/reglas.pdf' ?>">Reglamento</a>
            
            
        <!-- ############## fin alerta reglamento #############-->
    
<!--     <div class="accordion-group">
        <div class="accordion-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="accordion-inner">
          Panel content
        </div>
      </div> -->
        
        </div>
        </div>
    </div>  
        
    </div>     
        <!--fuera de sesion-->
<?php

            }
      
      if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }
            
  ?>