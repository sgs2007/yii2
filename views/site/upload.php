<?php
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
?>

<?php Pjax::begin();?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>
<?php Pjax::end();?>