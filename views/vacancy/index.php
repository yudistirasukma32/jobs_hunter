<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VacancySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Job Vacancies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacancy-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
         <!--Html::a('Create Vacancy', ['create'], ['class' => 'btn btn-success'])-->
    </p>


    <div class="panel panel-primary">
        <div class="panel-heading">
            Vacancy
        </div>
        <div class="panel-body">
            <?= \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'summary'=>'',
                'itemOptions' => ['class' => 'item'],
                'itemView' => '_view',
                'viewParams' => [
                    'fullView' => true,
                ],
            ]) ?>
        </div>
    </div>

</div>
