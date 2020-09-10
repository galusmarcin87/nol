<?

use app\components\mgcms\MgHelpers;


?>
<section class="Counter">
    <div class="container">
        <div class="Slider-counter">
            <div data-date="dec 31, 2020 15:37:25" class="Count-down-timer">
                <div class="Slider-counter__heading"><?= Yii::t('db', 'Left'); ?></div>
                <div class="Count-down-timer__day"><span></span> <?= Yii::t('db', 'days'); ?></div>
                <div class="Count-down-timer__hour"><span></span> <?= Yii::t('db', 'hours'); ?></div>
                <div class="Count-down-timer__minute"><span></span> <?= Yii::t('db', 'minutes'); ?></div>
                <div class="Count-down-timer__second"><span></span> <?= Yii::t('db', 'seconds'); ?></div>
            </div>
            <div class="Invest-counter">
                <div class="Invest-counter__header">
                    <div class="Invest-counter__source">
                        <span class="Invest-counter__source__value">1 750 000 PLN</span>
                        (<span data-to="22" class="Invest-counter__source__percent"
                        >0</span
                        >%)
                    </div>
                    <div class="Invest-counter__target">CEL: 10 000 000 PLN</div>
                </div>
                <div class="Invest-counter__value-line-wrapper">
                    <div
                            data-to="1750000"
                            data-slide-to="22"
                            class="Invest-counter__value-line"
                            style="width: 0%"
                    ></div>
                </div>
            </div>
            <div class="Slider-counter__buttons">
                <div>
                    <a class="btn btn-primary btn-small" href="#"><?= Yii::t('db', 'WHITEPAPER'); ?></a>
                    <a class="btn btn-primary btn-small" href="#"
                    ><?= Yii::t('db', 'Details of investition'); ?></a
                    >
                </div>
                <div>
                    <a class="btn btn-primary btn-small" href="#"><?= Yii::t('db', 'Buy tokens'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>