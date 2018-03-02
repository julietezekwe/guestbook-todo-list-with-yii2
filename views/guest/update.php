<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Update';
$this->params['breadcrumbs'][] = $this->title;

?>


    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'purpose')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender') ?>
    <?= $form->field($model, 'time_in')->dropDownist('time') ?>

    <?= $form->field($model, 'time_out')->Input('date') ?>
    <div class="form-group">
        <?= Html::submitButton('Update', ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>



