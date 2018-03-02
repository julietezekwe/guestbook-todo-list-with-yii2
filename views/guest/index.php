<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Guest Log';
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
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Phone</th>
      <th scope="col">Purpose</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
<?php foreach ($model as $model): ?>
    <tr>
        <th><?= $num ?></th>
    	<td><?= Html::encode("{$model->firstname}") ?></td>
        <td><?= Html::encode("{$model->lastname}") ?></td>
        <td><?= Html::encode("{$model->phone}") ?></td>
        <td><?= Html::encode("{$model->purpose}") ?></td>
        <td><?= Html::encode("{$model->gender}") ?></td>
        <td><?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], ['class' => 'btn btn-danger',
        ]) ?>
          <?= Html::a('View', ['view', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        </td>
    </tr>
<?php $num++; endforeach; ?>
</tbody>
</table>


<?= LinkPager::widget(['pagination' => $pagination]) ?>
