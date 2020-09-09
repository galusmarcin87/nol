<?php
/* @var $this yii\web\View */

/* @var $model \app\models\mgcms\db\Project */


use yii\helpers\Html;
use app\components\mgcms\MgHelpers;


$model->language = Yii::$app->language;

?>

<div class="item" data-dot="<?= $index + 1?>>">
    <div
            class="Slider__item"
            style="background-image: url('<?= $model->file && $model->file->isImage() ? $model->file->getImageSrc(1360, 768) : '' ?>')"
    >
        <div class="container">
            <div class="Slider__description">
                <div class="Slider__description__header">
                    <?= Yii::t('db', 'Investition in'); ?>
                    <div><?= $model->name ?></div>
                </div>
                <div class="Slider__description__content">
                    <?= $model->lead ?>
                </div>
                <a class="btn btn-primary btn-small"
                   href="<?= $model->linkUrl ?>"><?= Yii::t('db', 'More about project'); ?>
                </a>
                <div class="owl-dots">
                    <?for($i = 1; $i <= $count; $i++):?>
                        <div class="owl-dot"><?=$i?></div>
                    <?endfor;?>
                </div>
            </div>
        </div>
    </div>
</div>
