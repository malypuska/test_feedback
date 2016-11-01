<?php
$this->pageTitle=Yii::app()->name . ' - Ошибка: '.$code;
?>
<h1>Ошибка</h1>
<div class="error_str">
    <?= CHtml::encode($message); ?>
</div>