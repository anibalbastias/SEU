<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$model=Usuarios::model()->findByPk(Yii::app()->session['var']);
?>


<div class="container">
    <div class="row">
        <div class="span12">
            
            
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        ),
)); ?>
    <h2>Modificar Datos Perfil</h2>
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
		<?php echo $form->textField($model,'rut_usuario',array('size'=>60,'maxlength'=>100)); ?>
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
        
        <div class="span3">
                        
                        <?php echo $form->label($model,Yii::t('messages','id_carrera')); ?>
                        <?php echo $form->hiddenField($model,'id_usuario',array()); ?>
                        <?php 
                        $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                            'name'=>'nom_carrera',
                            'sourceUrl'=>$this->createUrl('carreras/autocomplete'),
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
		<?php echo $form->labelEx($model,'estudios_usuario'); ?>
		<?php echo $form->textField($model,'estudios_usuario'); ?>
		<?php echo $form->error($model,'estudios_usuario'); ?>
	</div>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'fnac_usuario'); ?>
		<?php echo $form->textField($model,'fnac_usuario'); ?>
		<?php echo $form->error($model,'fnac_usuario'); ?>
	</div>-->

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
		<?php echo $form->textField($model,'genero_usuario'); ?>
		<?php echo $form->error($model,'genero_usuario'); ?>
	</div>

	<div class="span3">
		<?php echo $form->labelEx($model,'hijos_usuario'); ?>
		<?php echo $form->textField($model,'hijos_usuario',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hijos_usuario'); ?>
	</div>

	<div class="span3">
		<?php echo $form->labelEx($model,'pass_usuario'); ?>
		<?php echo $form->passwordField($model,'pass_usuario',array('size'=>60,'maxlength'=>100 , 'type'=>'password')); ?>
		<?php echo $form->error($model,'pass_usuario'); ?>
	</div>

	<div class="span3" style="margin-top: 24px;">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Usuario' : 'Guardar Datos',array('class'=>'btn btn-primary')); ?>
	</div>
</div>

<?php $this->endWidget(); ?>

    </div><!-- form -->
        
        
    </div>
</div>