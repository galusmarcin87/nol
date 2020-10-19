<?php

/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\web\View;

?>
?>
<div class="site-error Section--big-padding-top ">


<form method="post" id="tokeneo-payment-form"
      action="https://pay.tokeneo.com/v1/order">
    <input type="hidden" name="session_id" value="<?php print session_id(); ?>">
    <input type="hidden" name="amount" value="2">
    <input type="hidden" name="currency" value="PLN">
    <input type="hidden" name="crypto_currency" value="BTC">
    <input type="hidden" name="description" value="Test">
    <input type="hidden" name="first_name" value="Mar">
    <input type="hidden" name="last_name" value="aa">
    <input type="hidden" name="street" value="33">
    <input type="hidden" name="street_no" value="23">
    <input type="hidden" name="city" value="45">
    <input type="hidden" name="post_code" value="34">
    <input type="hidden" name="country" value="456">
    <input type="hidden" name="email" value="galusmarcin87@gmail.com">
    <input type="hidden" name="language" value="PL">
    <input type="hidden" name="order_id" value="1">
    <input type="hidden" name="shop_id" value="1>
    <input type="hidden" name="signature" value="2">
    <input type="hidden" name="return_url" value="/">
    <button type="submit" value="Kup">
</form>
</div>
