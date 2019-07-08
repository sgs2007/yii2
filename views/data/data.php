<?php
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

?>
<?php Pjax::begin(); ?>
  <?= GridView::widget([
    'dataProvider' => $dataProvider,
  ]); ?>
<?php Pjax::end();?>

<?php Pjax::begin(); ?>
  <div class="data-form">
    <h3><?= Html::encode('Add data: '); ?></h3>
    <?php if (Yii::$app->session->hasFlash('success')):?>
    <?php echo Yii::$app->session->getFlash('success'); ?>
    <?php endif;?>
    <?php if (Yii::$app->session->hasFlash('error')):?>
    <?php echo Yii::$app->session->getFlash('error'); ?>
    <?php endif;?>
    <?php $form = ActiveForm::begin([
      'action' => Url::toRoute(['data']),
      'options' => [
          'data-pjax' => 1,
          'enctype' => 'multipart/form-data',
        ]
    ]); ?>
    <?= $form->field($model,'file')->fileInput()->label(false)?>
    <?= Html::submitButton(
            'Load Data',
            ['class' => 'btn btn-primary', 'data-pjax' => 0]
        ); ?>
    <?php ActiveForm::end(); ?>
  </div>
<?php Pjax::end();?>