<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Create Log';
$this->params['breadcrumbs'][] = $this->title;

?>

<h1><?= Html::encode($this->title) ?></h1>


<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'purpose')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'gender')->dropDownList(['m'=>'Male', 'f' =>'Female'], ['prompt'=>'Gender']) ?>
    
    <div class="form-group">
        <?= Html::submitButton('Create', ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


