<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Todo;
use yii\data\Pagination;

class TodoController extends \yii\web\Controller
{
	    public function actionIndex()
	    {   
	       $model = Todo::find();

	         $pagination = new Pagination([
	             'defaultPageSize' => 10,
	             'totalCount' => $model->count(),
	         ]);

	         $model = $model->orderBy('TaskId')
	             ->offset($pagination->offset)
	             ->limit($pagination->limit)
	             ->all();

	         return $this->render('index', [
	             'model' => $model,
	             'pagination' => $pagination,
	         ]);

	    }

        
        public function actionCreate()
        {
            $model = new Todo();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'TaskId' => $model->TaskId]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }

        public function actionView($TaskId)
        {
         $model = Todo::findOne($TaskId);
          
            return $this->render('view', [
                'model' => $model,
            ]);
        }

       
        public function actionUpdate($TaskId)
        {
            $model = Todo::findOne($TaskId);
            

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'TaskId' => $model->TaskId]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }

        
         
        public function actionDelete($TaskId)
        {   $model = Todo::findOne($TaskId);
            $model->delete();

            return $this->redirect(['index']);
        }

        }





