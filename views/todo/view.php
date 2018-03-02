<?php

use yii\helpers\Html;
$this->title = 'View Task';
$this->params['breadcrumbs'][] = $this->title;
?>


    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'TaskId' => $model->TaskId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'TaskId' => $model->TaskId], ['class' => 'btn btn-danger',
        ]) ?>
    </p>

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Task Name</th>
          <th scope="col">Task Day</th>
          <th scope="col">Task Status</th>             
        
          
          
        </tr>
      </thead>
      <tbody>
    
        <tr>
            <th><?= Html::encode("{$model->TaskId}") ?></th>
            <td><?= Html::encode("{$model->TaskName}") ?></td>
            <td><?= Html::encode("{$model->TaskDay}") ?></td>
            <td><?= Html::encode("{$model->TaskAction}") ?></td>
            
            
        </tr>
  
    </tbody>
    </table>
    


