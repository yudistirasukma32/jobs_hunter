<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;

/**
 * @var \yii\web\View $this
 * @var \dektrium\user\models\Profile $profile
 */

$this->title = empty($profile->name) ? Html::encode($profile->user->username) : Html::encode($profile->name);
$this->params['breadcrumbs'][] = $this->title;

$dataProvider = new \yii\data\SqlDataProvider([
    'sql' => 'SELECT * from educations where user_id = '.$profile->user_id .' '
]);

$dataProvider2 = new \yii\data\SqlDataProvider([
    'sql' => 'SELECT * from experience where user_id = '.$profile->user_id .' '
]);
?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="row">
            <div class="col-sm-2 col-md-2">
                <hr/>
                <img src="http://id.gravatar.com/avatar/<?= $profile->gravatar_id ?>?s=230" alt="" class="img-rounded img-responsive" />
            </div>
            <div class="col-sm-10 col-md-10">
                <hr/>
                <h4><?= $this->title ?></h4>
                <ul style="padding: 0; list-style: none outside none;">
                    <?php if (!empty($profile->location)): ?>
                        <li><i class="glyphicon glyphicon-map-marker text-muted"></i> <?= Html::encode($profile->location) ?></li>
                    <?php endif; ?>
                    <?php if (!empty($profile->phone)): ?>
                        <li><i class="glyphicon glyphicon-phone text-muted"></i> <?= Html::encode($profile->phone) ?></li>
                    <?php endif; ?>
                    <?php if (!empty($profile->website)): ?>
                        <li><i class="glyphicon glyphicon-globe text-muted"></i> <?= Html::a(Html::encode($profile->website), Html::encode($profile->website)) ?></li>
                    <?php endif; ?>
                    <?php if (!empty($profile->public_email)): ?>
                        <li><i class="glyphicon glyphicon-envelope text-muted"></i> <?= Html::a(Html::encode($profile->public_email), 'mailto:' . Html::encode($profile->public_email)) ?></li>
                    <?php endif; ?>
                </ul>

                <?php if (!empty($profile->bio)): ?>
                    <p><?= Html::encode($profile->bio) ?></p>
                <?php endif; ?>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Ability
                    </div>
                    <div class="panel-body">
                        <?php
                        $connection = \Yii::$app->db;
                        $sql='SELECT * from ability where user_id = '.$profile->user_id .'';
                        $model = $connection->createCommand($sql);
                        $abi = $model->queryAll();

                        foreach($abi as $data) {
                            ?>

                            <span class="label label-default"><?= $data['name']; ?></span>
                            <?php
                        };
                        ?>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Educations
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

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Work Experience
                    </div>
                    <div class="panel-body">
                        <?= \yii\widgets\ListView::widget([
                            'dataProvider' => $dataProvider2,
                            'summary'=>'',
                            'itemOptions' => ['class' => 'item'],
                            'itemView' => '_view2',
                            'viewParams' => [
                                'fullView' => true,
                            ],
                        ]) ?>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
