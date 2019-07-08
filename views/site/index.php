<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


$this->title = 'My Yii Application';
?>
<?php if (Yii::$app->session->hasFlash('success')):?>
<?php echo Yii::$app->session->getFlash('success'); ?>
<?php endif;?>
<?php if (Yii::$app->session->hasFlash('error')):?>
<?php echo Yii::$app->session->getFlash('error'); ?>
<?php endif;?>
<?php $form = ActiveForm::begin(['options' => ['id' => 'testform','class' => 'normas']]) ?>
<?= $form->field($model,'name')->label('Имя') ?>
<?= $form->field($model,'email')->input('email') ?>
<?= $form->field($model,'text')->label('Текст сообщения')->textarea(['rows' => 5])?>
<?= Html::submitButton('Send',['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>