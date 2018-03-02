<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Todo List';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Guest Log</h1>

<?php 
   $num = 1;

 ?> 
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Task Name</th>
      <th scope="col">Task Day</th>
      <th scope="col">Task Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
<?php foreach ($model as $model): ?>
    <tr>
        <th><?= $num ?></th>
    	<td><?= Html::encode("{$model->TaskName}") ?></td>
        <td><?= Html::encode("{$model->TaskDay}") ?></td>
        <td><?= Html::encode("{$model->TaskAction}") ?></td>
    
        <td>
          <?= Html::a('Update', ['update', 'TaskId' => $model->TaskId], ['class' => 'btn btn-primary']) ?>
          <?= Html::a('Delete', ['delete', 'TaskId' => $model->TaskId], ['class' => 'btn btn-danger',]) ?>
          <?= Html::a('View', ['view', 'TaskId' => $model->TaskId], ['class' => 'btn btn-primary']) ?>
             
           </td>
    </tr>
<?php $num++; endforeach; ?>
</tbody>
</table>


<?= LinkPager::widget(['pagination' => $pagination]) ?>
