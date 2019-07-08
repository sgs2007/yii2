<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\components\Widget1;
use yii\widgets\Menu;


$this->title = 'about2';
?>
<div class="row">
  <div class="col-lg-12">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo Widget1::widget(['name' => 'Serg Markovich']); ?>
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
  </div>
</div>