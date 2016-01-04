<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vacancy */

$this->title = $model->position;
$this->params['breadcrumbs'][] = ['label' => 'Vacancies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacancy-view">

    <h1><?= Html::encode($model->position) ?></h1>

    <p>
        <?php // Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php // Html::a('Delete', ['delete', 'id' => $model->id], [
            //'class' => 'btn btn-danger',
            //'data' => [
            //    'confirm' => 'Are you sure you want to delete this item?',
            //    'method' => 'post',
            //],
        //]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
//            'company_id',
            'company.name',
            'position',
            'description:ntext',
            'company.email',
            'company.address',
            'company.location',
            //'start_date',
            'expired',
            'status',
        ],
    ]) ?>
    <?php //echo Html::a('Apply', ['apply', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
</div>
