<?php
/* @var $model app\models\mgcms\db\Project */

/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use yii\web\View;
use yii\helpers\Url;

$this->title = $model->name;
$model->language = Yii::$app->language;
if (!$model->money_full) {
    return false;
}

$index = 0;
?>

<style>
    .Project__info {
        display: grid;
        grid-template-columns: 60% auto;
        grid-column-gap: var(--gap);
    }
</style>

<section
        class="Section Section--big-padding-top Tokenomania"
        style="padding-bottom: 0"
>
    <div class="container">
        <h2 class="O-projekcie__header"><?= Yii::t('db', 'Tokenomia'); ?></h2>
        <div class="row">
            <div class="col-lg-4">
                <h6 class="O-projekcie__text text-left">
                    <?= $model->lead ?>
                </h6>
                <div style="margin-top: 30px">
                    <a class="btn btn-primary btn-full-width"
                       href="<?= Url::to(['project/buy', 'id' => $model->id]) ?>"><?= Yii::t('db', 'INVEST'); ?></a>
                    <a class="btn btn-black btn-full-width"
                       href="<?= $model->whitepaper ?>"><?= Yii::t('db', 'WHITEPAPER'); ?></a>
                    <a class="btn btn-black btn-full-width" href="#">ONEPAGER</a>
                </div>
            </div>
            <div class="col-lg-8">
                <section class="Counter Counter--small">
                    <div class="container">


                        <div class="Slider-counter">
                            <div
                                    data-date="<?= $model->date_crowdsale_end ?>"
                                    class="Count-down-timer Count-down-timer--small"
                            >
                                <div class="Slider-counter__heading"><?= Yii::t('db', 'Left'); ?></div>
                                <div class="Count-down-timer__day"><span></span> <?= Yii::t('db', 'days'); ?></div>
                                <div class="Count-down-timer__hour">
                                    <span></span> <?= Yii::t('db', 'hours'); ?>
                                </div>
                                <div class="Count-down-timer__minute">
                                    <span></span> <?= Yii::t('db', 'minutes'); ?>
                                </div>
                                <div class="Count-down-timer__second">
                                    <span></span> <?= Yii::t('db', 'seconds'); ?>
                                </div>
                            </div>
                            <div class="Invest-counter">
                                <div class="Invest-counter__header">
                                    <div class="Invest-counter__source">
                        <span class="Invest-counter__source__value"
                        ><?= $model->money ?> PLN</span
                        >
                                        (<span
                                                data-to="<?= round(($model->money / $model->money_full) * 100, 3) ?>"
                                                class="Invest-counter__source__percent"
                                        >0</span
                                        >%)
                                    </div>
                                    <div class="Invest-counter__target">
                                        cel: <?= $model->money_full ?> PLN
                                    </div>
                                </div>
                                <div class="Invest-counter__value-line-wrapper">
                                    <div
                                            data-to="<?= $model->money ?>"
                                            data-slide-to="<?= round(($model->money / $model->money_full) * 100, 3) ?>"
                                            class="Invest-counter__value-line"
                                            style="width: 0%"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <section class="Section Project">
        <div class="container">
            <div class="Project__info">
                <div>
                    <div class="Carousel Single-image-slider">
                        <div class="owl-carousel owl-theme animatedParent">
                            <? foreach ($model->files as $file): ?>
                                <? if ($file->isImage()): $index++; ?>
                                    <a class="Image-slider__card item" href="<?= $file->getImageSrc(1360, 768) ?>">
                                        <img
                                                class="Image-slider__image fadeIn animated"
                                                src="<?= $file->getImageSrc(822, 460) ?>"
                                                alt=""
                                        />
                                    </a>
                                <? endif; ?>
                            <? endforeach; ?>
                        </div>
                        <div
                                class="Custom-nav Custom-nav--color-black Single-image-slider__nav"
                        ></div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p class="light">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                        natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                        et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                    <p class="light">
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                        aut fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                        ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                        non numquam eius modi tempora incidunt ut labore et dolore
                        magnam aliquam quaerat voluptatem.
                    </p>
                </div>
                <div class="Project__info__content">
                    <ul class="List-custom__two">
                        <li class="List-custom__two__item">
                  <span>
                    <strong>Inwestycja: <span>3 lata</span></strong>
                  </span>
                            <span>
                    <strong> Oferowane: <span>15%</span> </strong>
                  </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> Lokalizacja: </span>
                            <span> Warszawa, Polska </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> Czas inwestycji: </span>
                            <span> 3 lata </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> Roczny zysk: </span>
                            <span> 15% </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> Start pre-sale: </span>
                            <span> 2019-08-01 </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> Koniec pre-sale: </span>
                            <span> 2019-11-30 </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> Start crowdsale: </span>
                            <span> 2019-12-01 </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> Koniec crowdsale: </span>
                            <span> 2020-10-31 </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> Zysk crowdsale: </span>
                            <span> 15 </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> Bonus pre-sale: </span>
                            <span> 1 </span>
                        </li>
                    </ul>

                    <ul class="List-custom__two">
                        <li class="List-custom__two__item">
                  <span>
                    <strong> <span>Token</span></strong>
                  </span>
                            <div></div>
                        </li>
                        <li class="List-custom__two__item">
                            <span> Wartość: </span>
                            <span> 100 </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> Blockchain: </span>
                            <span> BlockchainEthereum </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> Przeznaczone do sprzeday: </span>
                            <span> $3000000 </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> Minimalny zakup: </span>
                            <span> $200 </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> Pozostało </span>
                            <span> #343 </span>
                        </li>
                    </ul>

                    <ul class="List-custom__two">
                        <li class="List-custom__two__item">
                  <span>
                    <strong> <span>Bonus</span></strong>
                  </span>
                            <div></div>
                        </li>
                        <li class="List-custom__two__item">
                            <span> 1-2 tokenów: </span>
                            <span> $34 </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> 2-10 tokenów: </span>
                            <span> $2 </span>
                        </li>
                        <li class="List-custom__two__item">
                            <span> 10-20 tokenów: </span>
                            <span> $60 </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</section>
<section class="Section Analize animatedParent">
    <div class="container fadeIn animated">
        <h3 class="Header-icon">
            Tokeny i ich podział
            <img class="Header-icon__icon" src="./svg/znaczek.svg" alt=""/>
        </h3>
        <h6 class="O-projekcie__desc O-projekcie__desc--black">
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
            sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor
            sit amet, consectetur, adipisci velit.
        </h6>
        <div class="row">
            <div class="col-lg-6">
                <p class="O-projekcie__text text-left">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt.
                </p>
            </div>
            <div class="col-lg-6">
                <p class="O-projekcie__text text-left">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="O-projekcie__img" src="./img/img_3.png" alt=""/>
            </div>
            <div class="col-md-6">
                <img class="O-projekcie__img" src="./img/img_4.png" alt=""/>
            </div>
        </div>

        <h3 class="Header-icon">
            Regulaminy
            <img class="Header-icon__icon" src="./svg/znaczek.svg" alt=""/>
        </h3>

        <div class="Doc">
            <div>Regulamin inwestora</div>
            <a href="#" class="btn btn-gray">Pobierz plik</a>
        </div>
        <div class="Doc">
            <div>Regulamin portalu</div>
            <a href="#" class="btn btn-gray">Pobierz plik</a>
        </div>
    </div>
</section>


<Section class="Section Project">
    <div class="container">
        <h1><?= $model->name ?></h1>
        <div class="Project__content">
            <? if ($model->file && $model->file->isImage()): ?>
                <?= $model->file->getImage(705, 605, ['class' => 'Project__photo'], \Imagine\Image\ManipulatorInterface::THUMBNAIL_OUTBOUND); ?>
            <? endif ?>
            <div class="Project__info">
                <div class="Project__slider">
                    <div class="owl-carousel">
                        <? foreach ($model->files as $file): ?>
                            <? if ($file->isImage()): ?>
                                <img src="<?= $file->getImageSrc(705, 605) ?>" class="item">
                            <? endif; ?>
                        <? endforeach; ?>
                    </div>
                </div>
                <div class="Project__info__content">
                    <?= $this->render('view/table', ['model' => $model]) ?>
                    <div class="Invest-counter">
                        <div class="Invest-counter__body">
                            <div class="Invest-counter__body__heading">
                                <?= Yii::t('db', 'Time left'); ?>
                            </div>
                            <div
                                    data-date="<?= $model->date_crowdsale_end ?>"
                                    class="Count-down-timer"
                            >
                                <div class="Count-down-timer__day">
                                    <span></span> <?= Yii::t('db', 'days'); ?>
                                </div>
                                <div class="Count-down-timer__hour">
                                    <span></span> <?= Yii::t('db', 'hours'); ?>
                                </div>
                                <div class="Count-down-timer__minute">
                                    <span></span> <?= Yii::t('db', 'minutes'); ?>
                                </div>
                                <div class="Count-down-timer__second">
                                    <span></span> <?= Yii::t('db', 'seconds'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="Invest-counter__header">
                            <div class="Invest-counter__source">
                                $<span class="Invest-counter__source__value"><?= MgHelpers::convertNumberToNiceString($model->money) ?></span>
                                <? if ($model->money_full): ?>
                                    (<span data-to="<?= round(($model->money / $model->money_full) * 100, 3) ?>"
                                           class="Invest-counter__source__percent">0</span>%)
                                <? endif; ?>
                            </div>
                            <div class="Invest-counter__target">
                                $<?= MgHelpers::convertNumberToNiceString($model->money_full) ?>
                            </div>
                        </div>
                        <div class="Invest-counter__value-line-wrapper">
                            <div
                                    data-to="<?= $model->money ?>"
                                <? if ($model->money_full): ?>
                                    data-slide-to="<?= round(($model->money / $model->money_full) * 100, 3) ?>"
                                <? endif; ?>
                                    class="Invest-counter__value-line" style="width: 0%"></div>
                        </div>
                    </div>
                    <a class="btn btn-success btn-block btn--lowercase btn--line-top"
                       href="<?= Url::to(['project/buy', 'id' => $model->id]) ?>"><?= Yii::t('db', 'Invest'); ?></a>
                </div>
            </div>
        </div>
        <div class="Project__content">
            <div class="Project__map" id="map"></div>
            <? if (sizeof($model->bonuses) > 0): ?>


                <div>
                    <ul class="List-custm__checklist">
                        <? foreach ($model->bonuses as $bonus): ?>
                            <li class="List-custm__checklist__item">
                                <strong><?= $bonus->from ?></strong> <?= $bonus->value ?>
                            </li>
                        <? endforeach; ?>
                    </ul>
                </div>
            <? endif; ?>
        </div>
    </div>
    <div class="container">
        <p>
            <?= $model->lead ?>
        </p>
        <p>
            <small>
                <?= $model->text ?>
            </small>
        </p>
        <a class="btn btn-success btn--lowercase btn--medium btn--line-top"
           href="<?= Url::to(['project/buy', 'id' => $model->id]) ?>"><?= Yii::t('db', 'Invest'); ?></a>
        <div class="White-text-block">
            <div>
                <h5 class="White-text-block__header">
                    <strong><?= MgHelpers::getSettingTranslated('project - first column header', 'Masz pytania? Świetnie!') ?></strong><br>
                    <?= MgHelpers::getSettingTranslated('project - first column rest', 'Chętnie odpowiemy.<br>Skontaktuj się z nami.') ?>
                </h5>
            </div>
            <div>
                <p>
                    <span class="White-text-block__highline"><?= MgHelpers::getSettingTranslated('project - second column header', 'RIVA Finance') ?></span><br>
                    <?= MgHelpers::getSettingTranslated('project - second column', 'Adam Kowalski - Specjalista ds. inwestycji
                    <br>
                    <a href="tel+48 502 502 502">+48 502 502 502</a>
                    <br>
                    <a href="mailto:jan.nowak@propertyinvestment.pl">jan.nowak@propertyinvestment.pl</a>') ?>

                </p>
            </div>
            <div>
                <p>
                    <span class="White-text-block__highline"><?= MgHelpers::getSettingTranslated('project - third column header', 'RIVA Finance') ?></span><br>
                    <?= MgHelpers::getSettingTranslated('project - third column', 'Adam Kowalski - Specjalista ds. inwestycji
                    <br>
                    <a href="tel+48 502 502 502">+48 502 502 502</a>
                    <br>
                    <a href="mailto:jan.nowak@propertyinvestment.pl">jan.nowak@propertyinvestment.pl</a>') ?>
                </p>
            </div>
        </div>
    </div>
</Section>


<?= $this->render('view/script', ['model' => $model]) ?>

