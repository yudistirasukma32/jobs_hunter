<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
if (class_exists('yii\debug\Module')) {
    $this->off(\yii\web\View::EVENT_END_BODY, [\yii\debug\Module::getInstance(), 'renderToolbar']);
}
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<?php $title = 'Jobs Hunter';?>

<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>

        .myclass{
            width:50px;
        }

    </style>
</head>

<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        //'brandLabel' => Html::img('@web/assets/logo/logojh.png', ['alt'=>Yii::$app->name]),
        //'brandLabel' => '<img src="../../web/assets/logo/logojh.png"  style="width:25px;"/>Jobs Hunter',
        //'brandOptions' => ['class' => 'myclass'],
        'brandLabel' => 'Jobs Hunter',
        'brandUrl' => Yii::$app->homeUrl.'site/index',
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    $navItems=[
        ['label' => 'Home', 'url' => ['/site/index']],

    ];
    if (Yii::$app->user->isGuest) {
        array_push($navItems,
                            ['label' => 'About', 'url' => ['/site/about']],
                            ['label' => 'Contact', 'url' => ['/site/contact']],
                            ['label' => 'Sign In', 'url' => ['/user/login']],
                            ['label' => 'Sign Up', 'url' => ['/user/register']]);
    } else {
        array_push($navItems,
            ['label' => 'Jobs', 'url' => ['#']],
            ['label' => 'Profile', 'url' => ['/user/profile']],
            ['label' => 'Settings', 'url' => ['/user/settings/']],
            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']]
        );
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $navItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Jobs Hunter <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
