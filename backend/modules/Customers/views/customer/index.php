<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\customers\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'customer_no',
            'customer_type',
            'customer_name',
            'customer_address',
            'customer_identification',
            // 'identification_number',
            // 'identification_exp_date',
            // 'nationality',
            // 'short_name',
            // 'liability_number',
            // 'customer_category',
            // 'record_stat',
            // 'auth_stat',
            // 'maker_id',
            // 'maker_dt_stamp',
            // 'checker_id',
            // 'checker_dt_stamp',
            // 'currency',
            // 'branch_code',
            // 'mode_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
