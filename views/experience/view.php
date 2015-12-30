<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Experience */

$this->title = $model->position;
$this->params['breadcrumbs'][] = ['label' => 'Profile settings', 'url' => ['/user/settings/']];
$this->params['breadcrumbs'][] = ['label' => 'Experiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="experience-view">

    <h1><?= Html::encode($this->title) ?> ( <?= Html::encode($model->company) ?> )</h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
//            'user_id',
            'company',
            'position',
            'startdate',
            'enddate',
            'location',
            'salary',
            'desc:ntext',
        ],
    ]) ?>

</div>
