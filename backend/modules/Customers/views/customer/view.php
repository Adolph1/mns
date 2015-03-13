<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\customers\models\Customer */

$this->title = $model->customer_no;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->customer_no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->customer_no], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'customer_no',
            'customer_type',
            'customer_name',
            'customer_address',
            'customer_identification',
            'identification_number',
            'identification_exp_date',
            'nationality',
            'short_name',
            'liability_number',
            'customer_category',
            'record_stat',
            'auth_stat',
            'maker_id',
            'maker_dt_stamp',
            'checker_id',
            'checker_dt_stamp',
            'currency',
            'branch_code',
            'mode_no',
        ],
    ]) ?>

</div>
