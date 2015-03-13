<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\customers\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <table class="table table-bordered">
    <tr>
    <td class="col-sm-4">
    <?= $form->field($model, 'customer_no')->textInput(['maxlength' => 5]) ?>
    </td>
    <td class="col-sm-4">
    <?= $form->field($model, 'customer_type')->textInput(['maxlength' => 20]) ?>
    </td>
    </tr>
    <td class="col-sm-4">
    <?= $form->field($model, 'customer_name')->textInput(['maxlength' => 200]) ?>
    </td>
    <td  class="col-sm-4">
    <?= $form->field($model, 'customer_address')->textInput(['maxlength' => 200]) ?>
    </td>
   </tr>
   </table>
    <?= $form->field($model, 'customer_identification')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'identification_number')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'identification_exp_date')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'short_name')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'liability_number')->textInput() ?>

    <?= $form->field($model, 'customer_category')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'record_stat')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'auth_stat')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'maker_id')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'maker_dt_stamp')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'checker_id')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'checker_dt_stamp')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'currency')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'branch_code')->textInput() ?>

    <?= $form->field($model, 'mode_no')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
