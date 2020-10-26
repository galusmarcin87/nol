<?php

/* @var $this yii\web\View */
/* @var $payment \app\models\mgcms\db\Payment*/
use app\components\mgcms\MgHelpers;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\web\View;

$sessionId = (int)$payment->percentage;
$amount = number_format($payment->amount,2);
$orderId = $payment->id;
echo '<pre>';
echo var_dump($payment->id);
echo '</pre>';
$shopId = MgHelpers::getConfigParam('tokeneoShopId');
$signature = $payment->user_token;


?>
?>
<div class="site-error Section--big-padding-top ">


    <form method="post" id="tokeneo-payment-form"
          action="<?=MgHelpers::getConfigParam('tokeneoEndpointUrl')?>">
        <input type="hidden" name="session_id" value="<?= $sessionId ?>">
        <input type="hidden" name="amount" value="<?= $amount ?>">
        <input type="hidden" name="currency" value="PLN">
        <input type="hidden" name="crypto_currency" value="ETH">
        <input type="hidden" name="description" value="Test">
        <input type="hidden" name="first_name" value="Mar">
        <input type="hidden" name="last_name" value="aa">
        <input type="hidden" name="street" value="33">
        <input type="hidden" name="street_no" value="23">
        <input type="hidden" name="city" value="45">
        <input type="hidden" name="post_code" value="34">
        <input type="hidden" name="country" value="PL">
        <input type="hidden" name="email" value="galusmarcin87@gmail.com">
        <input type="hidden" name="language" value="PL">
        <input type="hidden" name="order_id" value="<?= $orderId ?>">
        <input type="hidden" name="shop_id" value="<?= $shopId ?>">
        <input type="hidden" name="signature" value="<?= $signature ?>">
        <input type="hidden" name="return_url" value="/">
        <button type="submit" value="" id="">
    </form>
</div>

<script>
    $( document ).ready(function() {
        //$('#tokeneo-payment-form').submit();
    });
</script>