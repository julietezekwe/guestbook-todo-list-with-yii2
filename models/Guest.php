<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guest".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property integer $phone
 * @property string $purpose
 * @property string $gender
 * @property string $time_in
 * @property string $time_out
 */
class Guest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'phone', 'purpose', 'gender'], 'required'],
            [['phone'], 'integer'],
            [['gender'], 'string'],
            [['time_in', 'time_out'], 'safe'],
            [['firstname', 'lastname', 'purpose'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'phone' => 'Phone',
            'purpose' => 'Purpose',
            'gender' => 'Gender',
            'time_in' => 'Time In',
            'time_out' => 'Time Out',
        ];
    }
}
