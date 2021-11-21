<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <?php Nav::widget([
                'options' => ['class' => 'navbar-nav'],
                'encodeLabels' => false,
                'items' => [
                    [
                        'label' => '<i class="fa fa-bell-o"></i><span class="label label-warning">10</span>',
                        'url' => '#'
                    ],
                    [
                        'label' => '退出 (' . Yii::$app->user->identity->username . ')',
                        'url' => ['site/logout'],
                        'linkOptions' => [
                            'data-method' => 'post'
                        ],
                    ],
                ],
            ]); ?>

            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?= Html::img(Yii::$app->user->identity->avatar, [
                            'class' => 'user-image',
                        ]) ?>
                        <span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?= Html::img(Yii::$app->user->identity->avatar, [
                                'class' => 'img-circle',
                            ]) ?>

                            <p>
                                <?= Yii::$app->user->identity->username ?>
                                <small><?= date('Y-m-d H:i:s') ?></small>
                            </p>
                        </li>

                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    '登出',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
