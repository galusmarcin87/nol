<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use app\components\mgcms\MgHelpers;

?>


<?=$this->render('index/slider')?>

<?=$this->render('index/counter')?>

<?=$this->render('index/section1')?>

<div
    style="background-image: url(/svg/sygnet_gray.svg)"
    class="Section--bg-fixed Section--dark"
>
<?=$this->render('index/roadmap')?>
<?=$this->render('index/movies')?>
</div>
<?=$this->render('index/map')?>

<?=$this->render('index/paralax')?>

<?=$this->render('/common/news')?>

<?=$this->render('index/cooperateWith')?>

<?=$this->render('/common/faq')?>

