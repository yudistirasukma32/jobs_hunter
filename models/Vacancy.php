<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vacancy".
 *
 * @property integer $id
 * @property integer $company_id
 * @property string $position
 * @property string $description
 * @property string $location
 * @property string $start_date
 * @property string $expired
 * @property string $status
 *
 * @property ApplyLetter[] $applyLetters
 * @property Company $company
 */
class Vacancy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vacancy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'position', 'description', 'location', 'start_date', 'expired'], 'required'],
            [['company_id'], 'integer'],
            [['description', 'status'], 'string'],
            [['start_date', 'expired'], 'safe'],
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
            'company_id' => 'Company ID',
            'position' => 'Position',
            'description' => 'Description',
            'location' => 'Location',
            'start_date' => 'Start Date',
            'expired' => 'Expired',
            'status' => 'Status',
            'name'   => 'Company Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplyLetters()
    {
        return $this->hasMany(ApplyLetter::className(), ['vacancy_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'company_id']);
    }

}
