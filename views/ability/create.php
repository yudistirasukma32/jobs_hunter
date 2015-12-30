<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ability */

$this->title = 'Create Ability';
$this->params['breadcrumbs'][] = ['label' => 'Profile settings', 'url' => ['/user/settings/']];
$this->params['breadcrumbs'][] = ['label' => 'Abilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ability-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
