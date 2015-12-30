<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "experience".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $company
 * @property string $position
 * @property string $startdate
 * @property string $enddate
 * @property string $location
 * @property integer $salary
 * @property string $desc
 */
class Experience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'experience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'company', 'position', 'startdate', 'enddate', 'location'], 'required'],
            [['user_id', 'salary'], 'integer'],
            [['startdate', 'enddate'], 'safe'],
            [['desc'], 'string'],
            [['company'], 'string', 'max' => 100],
            [['position', 'location'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'company' => 'Company',
            'position' => 'Position',
            'startdate' => 'Start date',
            'enddate' => 'End date',
            'location' => 'Location',
            'salary' => 'Salary',
            'desc' => 'Desc',
        ];
    }
}
