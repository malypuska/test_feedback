<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'feedback-form',
)); ?>
<h2>Обратная связь</h2>
<?php if(Yii::app()->user->hasFlash('feedback-success')):?>
    <div class="feedback-success info">
        <?php echo Yii::app()->user->getFlash('feedback-success'); ?>
    </div>
<?php endif; ?>
<?php if(Yii::app()->user->hasFlash('feedback-error')):?>
    <div class="feedback-error info">
        <?php echo Yii::app()->user->getFlash('feedback-error'); ?>
    </div>
<?php endif; ?>
<?php 
Yii::app()->clientScript->registerScript(
   'myHideEffect',
   '$(".info").animate({opacity: 1.0}, 3000).fadeOut("slow");',
   CClientScript::POS_READY
);

    $form->errorSummary($model);
?>
<table>
    <tr>
        <td class="label"><?= $form->labelEx($model,'name'); ?>:</td>
        <td class="row">
             <?= $form->textField($model,'name'); ?>
             <?= $form->error($model,'name'); ?>
        </td>
    </tr>    
    <tr>
        <td class="label"><?= $form->labelEx($model,'email'); ?>:</td>
        <td class="row">
             <?= $form->textField($model,'email'); ?>
             <?= $form->error($model,'email'); ?>
        </td>
    </tr>    
    <tr>
        <td class="label"><?= $form->labelEx($model,'message'); ?>:</td>
        <td class="row">
             <?= $form->textArea($model,'message'); ?>
             <?= $form->error($model,'message'); ?>
        </td>
    </tr>    
    <tr>
        <td class="label"><?=$form->labelEx($model, 'verifyCode')?>:</td>
        <td class="row">
            <?php $this->widget('CCaptcha',array(
                    'showRefreshButton' => false, 
                    'clickableImage' => true,
                    'imageOptions' => array('title' => 'Обновить', 'style' => 'cursor: pointer;'),
                ))?>
            <?= $form->textField($model, 'verifyCode',array('class'=>'verify-code'))?>
            <?= $form->error($model,'verifyCode'); /*ошибка при вводе каптчи*/?>
        </td>
    </tr>    
    
    <tr>
        <td class="required" colspan="3">
            <span class="required">*</span> обязательное поле для заполнения
        </td>
    </tr>    
    <tr>
        <td class="required" colspan="3" align="center">
            <?= CHtml::submitButton('Отправить') ?>
        </td>
        <td></td>
    </tr>    
</table>    
<?php $this->endWidget(); ?>