<?php

use yii\helpers\Html;
$this->title = 'View';
$this->params['breadcrumbs'][] = $this->title;
?>


    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], ['class' => 'btn btn-danger',
        ]) ?>
    </p>

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Firstname</th>
          <th scope="col">Lastname</th>
          <th scope="col">Phone</th>
          <th scope="col">Purpose</th>        
          <th scope="col">Gender</th>
          
          
        </tr>
      </thead>
      <tbody>
    
        <tr>
            <th><?= Html::encode("{$model->id}") ?></th>
            <td><?= Html::encode("{$model->firstname}") ?></td>
            <td><?= Html::encode("{$model->lastname}") ?></td>
            <td><?= Html::encode("{$model->phone}") ?></td>
            <td><?= Html::encode("{$model->purpose}") ?></td>
            <td><?= Html::encode("{$model->gender}") ?></td>
            
        </tr>
  
    </tbody>
    </table>
    


