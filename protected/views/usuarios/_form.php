

<div class="">
    <div class="row-fluid">
            <div class="span-10 offset1 form" style="padding-top: 50px;">

                <?php $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'usuarios-form',
                        'enableAjaxValidation'=>false,
                        'htmlOptions' => array(
                            'enctype' => 'multipart/form-data',
                           ),
                )); ?>

                <p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

                <?php echo $form->errorSummary($model); ?>
                
                        <div class="span3">
                                <?php echo $form->labelEx($model,'foto_usuario'); ?>
                                <?php echo CHtml::activeFileField($model, 'id_usuario'); ?>
                                <?php echo $form->error($model,'id_usuario'); ?>
                        
                        <?php if($model->isNewRecord!='1'){ ?>
                        
                        <?php 
                            if($model->img_usuario == "1")
                                echo CHtml::image(Yii::app()->request->baseUrl.'/img/users/'.$model->id_usuario.".jpg","id_usuario",array("width"=>200)); 
                            else
                                echo CHtml::image(Yii::app()->request->baseUrl.'/img/users/gen.png',"id_usuario",array("width"=>200)); 
                        }
                        ?>
                        </div>
                    
                        <div class="span3">
                            <?php echo $form->labelEx($model,'rut_usuario'); ?>
                            <?php echo $form->textField($model,'rut_usuario',array('size'=>60,'maxlength'=>10)); ?>
                            <?php echo $form->error($model,'rut_usuario'); ?>
                        </div>

                        <div class="span3">
                            <?php echo $form->labelEx($model,'nom_usuario'); ?>
                            <?php echo $form->textField($model,'nom_usuario',array('size'=>60,'maxlength'=>100)); ?>
                            <?php echo $form->error($model,'nom_usuario'); ?>
                        </div>

                        <div class="span3">
                            <?php echo $form->labelEx($model,'apel1_usuario'); ?>
                            <?php echo $form->textField($model,'apel1_usuario',array('size'=>60,'maxlength'=>100)); ?>
                            <?php echo $form->error($model,'apel1_usuario'); ?>
                        </div>

                        <div class="span3">
                            <?php echo $form->labelEx($model,'apel2_usuario'); ?>
                            <?php echo $form->textField($model,'apel2_usuario',array('size'=>60,'maxlength'=>100)); ?>
                            <?php echo $form->error($model,'apel2_usuario'); ?>
                        </div>
                    

                    
<!--                    <div class="span3">
                            <?php //echo $form->labelEx($model,'carreras_id_carrera'); ?>
                            <?php //echo $form->textField($model,'carreras_id_carrera',array('size'=>10,'maxlength'=>10)); ?>
                            <?php //echo $form->error($model,'carreras_id_carrera'); ?>
                        </div>-->

                        <div class="span3">
                        
                        <?php echo $form->label($model,Yii::t('messages','id_carrera')); ?>
                        <?php echo $form->hiddenField($model,'id_usuario',array()); ?>
                        <?php 
                        $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                            'name'=>'nom_carrera',
                            'sourceUrl'=>$this->createUrl('carreras/autocomplete'),
                            "attribute"=>"carreras_id_carrera",
                                "model"=>$model,
                            // additional javascript options for the autocomplete plugin
                            'options'=>array(
                                'minLength'=>'1',
                            ),
                            'htmlOptions'=>array(
                                'style'=>'height:20px;',
                                'placeholder'=>'Escriba nombre carrera'
                            ),
                        ));
                        ?>
                      </div>

                        <div class="span3">
                            <?php //echo $form->labelEx($model,'comunas_id_comuna'); ?>
                            <?php //echo $form->textField($model,'comunas_id_comuna',array('size'=>10,'maxlength'=>10)); ?>
                            <?php //echo $form->error($model,'comunas_id_comuna'); ?>
                            
                            <?php echo $form->label($model,Yii::t('messages','id_comuna')); ?>
                            <?php echo $form->hiddenField($model,'id_usuario',array()); ?>
                            <?php 
                            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                                'name'=>'nom_comuna',
                                'sourceUrl'=>$this->createUrl('comunas/autocomplete'),
                                // additional javascript options for the autocomplete plugin
                                "attribute"=>"comunas_id_comuna",
                                "model"=>$model,
                                'options'=>array(
                                    'minLength'=>'1',
                                ),
                                'htmlOptions'=>array(
                                    'style'=>'height:20px;',
                                    'placeholder'=>'Escriba nombre comuna'
                                ),
                            ));
                            ?>
                            
                        </div>

                        <div class="span3">
                            <?php echo $form->labelEx($model,'dir_usuario'); ?>
                            <?php echo $form->textField($model,'dir_usuario',array('size'=>60,'maxlength'=>100)); ?>
                            <?php echo $form->error($model,'dir_usuario'); ?>
                        </div>

                        <div class="span3">
                            <?php echo $form->labelEx($model,'email_usuario'); ?>
                            <?php echo $form->textField($model,'email_usuario',array('size'=>60,'maxlength'=>100)); ?>
                            <?php echo $form->error($model,'email_usuario'); ?>
                        </div>
                    
                        <div class="span3">
                            <?php echo $form->labelEx($model,'cel_usuario'); ?>
                            <?php echo $form->textField($model,'cel_usuario',array('size'=>60,'maxlength'=>100)); ?>
                            <?php echo $form->error($model,'cel_usuario'); ?>
                        </div>

                        <?php $form->textField($model,'estudios_usuario'); ?>

                        <div class="span3">
                            <?php echo $form->labelEx($model,'fnac_usuario'); ?>
                            <?php // echo $form->textField($model,'edad'); 

                                $this->widget("zii.widgets.jui.CJuiDatePicker",array(
                                    "attribute"=>"fnac_usuario",
                                    "model"=>$model,
                                    "language"=>"es",
                                    "options"=>array(
                                        "dateFormat"=>"yy-mm-dd",
                                        "showButtonPanel" => true,
                                        "changeYear" => true,
                                        "yearRange" =>"-50:+10",
                                        "minDate" => "-80Y",
                                        "maxDate" => "+0Y",
                                    )
                                    ));

                            ?>
                            <?php echo $form->error($model,'fnac_usuario'); ?>
                        </div>

                        <div class="span3">
                            <?php echo $form->labelEx($model,'genero_usuario'); ?>
                            <?php //echo $form->textField($model,'genero_usuario'); ?>
                            <?php echo $form->dropDownList($model,'hijos_usuario', array("0"=>"Masculino","1"=>"Femenino")); ?>
                            <?php echo $form->error($model,'genero_usuario'); ?>
                        </div>

                    
                        <div class="span3">
                            <?php echo $form->labelEx($model,'hijos_usuario'); ?>
                            <?php //echo $form->textField($model,'hijos_usuario',array('size'=>10,'maxlength'=>10)); ?>
                            <?php echo $form->dropDownList($model,'hijos_usuario', array("0"=>"0","1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5")); ?>
                            <?php echo $form->error($model,'hijos_usuario'); ?>
                        </div>

                        <div class="span3">
                            <?php echo $form->labelEx($model,'pass_usuario'); ?>
                            <?php echo $form->passwordField($model,'pass_usuario',array('size'=>60,'maxlength'=>100 , 'type'=>'password')); ?>
                            <?php echo $form->error($model,'pass_usuario'); ?>
                        </div>
                    
                        

                        <div class="span3 buttons" style="margin-top: 25px;">
                                <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Usuario' : 'Guardar Usuario',array('class'=>'btn btn-primary')); ?>
                        </div>


                        

            <?php $this->endWidget(); ?>

            </div><!-- form -->
      
    </div>
</div>