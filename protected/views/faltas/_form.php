<?php
/* @var $this FaltasController */
/* @var $model Faltas */
/* @var $form CActiveForm */
?>




<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">
            
        </div>
        <div class="span8 centrar">
            
            <h1>Create Faltas</h1>
            
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'faltas-form',
	'enableAjaxValidation'=>false,
)); ?>

    

	<?php echo $form->errorSummary($model); ?>

      
    
    
<!--	<div class="row">
		<?php // echo $form->labelEx($model,'usuarios_id_usuario'); ?>
		<?php // echo $form->textField($model,'usuarios_id_usuario',array('size'=>10,'maxlength'=>10)); ?>
		<?php // echo $form->error($model,'usuarios_id_usuario'); ?>
            
	</div>-->
    
            <div class="row">
                        
                        <?php echo $form->label($model,Yii::t('messages','usuarios_id_usuario')); ?>
                        <?php echo $form->hiddenField($model,'usuarios_id_usuario',array()); ?>
                        <?php 
                        $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                            'name'=>'nom_usuario',
                            
                            'sourceUrl'=>$this->createUrl('faltas/autocomplete'),
                            "attribute"=>"usuarios_id_usuario",
                                "model"=>$model,
                            // additional javascript options for the autocomplete plugin
                            'options'=>array(
                                'minLength'=>'1',
                            ),
                            'htmlOptions'=>array(
                                'style'=>'height:20px;',
                                'placeholder'=>'Escriba nombre usuario'
                                
                            ),
                        ));
                        ?>
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_falta'); ?>
		<?php echo $form->textArea($model,'desc_falta',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'desc_falta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_falta'); ?>
		<?php //echo $form->textField($model,'tipo_falta',array('size'=>7,'maxlength'=>7)); ?>
                <?php echo $form->dropDownList($model,'tipo_falta', array("Sanción"=>"Sancion","Falta"=>"Falta")); ?>
		<?php echo $form->error($model,'tipo_falta'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'fecha_falta'); ?>
		<?php 
                    $this->widget(
                        'ext.jui.EJuiDateTimePicker',
                        array(
                            'model'     => $model,
                            'attribute' => 'fecha_falta',
                            'language'=> 'es',
                            'mode'    => 'datetime',
                            'options'   => array(
                                'dateFormat' => 'yy-mm-dd',
                                'timeFormat' => 'hh:mm:00',
                                "minDate" => "-0Y",
                                "maxDate" => "+1Y",
                            ),
                        )
                    );

                ?>
		<?php echo $form->error($model,'fecha_falta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Falta' : 'Guardar falta'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>
        <div class="span2">   
        
        </div>    
        
</div>
</div>   