<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "todo".
 *
 * @property integer $TaskId
 * @property string $TaskName
 * @property string $TaskDay
 * @property string $TaskAction
 */
class Todo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'todo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TaskName', 'TaskDay', 'TaskAction'], 'required'],
            [['TaskAction'], 'string'],
            [['TaskName', 'TaskDay'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TaskId' => 'Task ID',
            'TaskName' => 'Task Name',
            'TaskDay' => 'Task Day',
            'TaskAction' => 'Task Action',
        ];
    }
}
