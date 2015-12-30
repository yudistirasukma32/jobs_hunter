<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Educations */

$this->title = 'Update Educations: ' . ' ' . $model->major;
$this->params['breadcrumbs'][] = ['label' => 'Profile settings', 'url' => ['/user/settings/']];
$this->params['breadcrumbs'][] = ['label' => 'Educations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->major, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="educations-update">

    <h1>Update Educations</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
