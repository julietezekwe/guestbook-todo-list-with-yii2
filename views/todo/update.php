<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Update Task';
$this->params['breadcrumbs'][] = $this->title;

?>

<h1><?= Html::encode($this->title) ?></h1>


<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TaskName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TaskDay')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TaskAction')->dropDownList(['Done'=>'Done', 'Undone' =>'Undone'], ['prompt'=>'Status']) ?>

    
    <div class="form-group">
        <?= Html::submitButton('Update', ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


