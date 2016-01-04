<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "apply_letter".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $vacancy_id
 * @property string $status
 *
 * @property User $user
 * @property Vacancy $vacancy
 */
class ApplyLetter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apply_letter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'vacancy_id'], 'required'],
            [['user_id', 'vacancy_id'], 'integer'],
            [['status'], 'string']
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
            'vacancy_id' => 'Vacancy ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVacancy()
    {
        return $this->hasOne(Vacancy::className(), ['id' => 'vacancy_id']);
    }
}
