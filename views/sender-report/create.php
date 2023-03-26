<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SenderReport $model */

$this->title = 'Create Sender Report';
$this->params['breadcrumbs'][] = ['label' => 'Sender Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sender-report-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
