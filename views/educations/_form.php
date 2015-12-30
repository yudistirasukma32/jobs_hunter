<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Educations */
/* @var $form yii\widgets\ActiveForm */
$user_id = Yii::$app->user->identity->id;
?>

<div class="educations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=  $form->field($model, 'user_id')
        ->hiddenInput(['value' => $user_id])
        ->label(false); ?>

    <?= $form->field($model, 'institution')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'graduated')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'major')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
