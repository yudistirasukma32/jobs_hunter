<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ability */

$this->title = 'Update Ability: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Profile settings', 'url' => ['/user/settings/']];
$this->params['breadcrumbs'][] = ['label' => 'Abilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ability-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
