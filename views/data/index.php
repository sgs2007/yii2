<?php
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php Pjax::begin(['enablePushState' => false, 'id' => 'data-create']); ?>
  <div class="data-form">
    <h3><?php Html::encode('Add data: ') ?></h3>
    <?php $form = ActiveForm::begin([
      'id' => 'data_form',
      'action' => Url::toRoute(['data']),
          'options' => [
            'data-pjax' => 1,
            'enctype' => 'multipart/form-data'
        ]
    ]); ?>
  </div>
<?php Pjax::end();?>