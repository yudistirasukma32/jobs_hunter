<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "educations".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $institution
 * @property string $graduated
 * @property string $major
 * @property string $titles
 *
 * @property User $user
 */
class Educations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'educations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'institution', 'graduated'], 'required'],
            [['user_id'], 'integer'],
            [['graduated'], 'safe'],
            [['institution', 'major', 'titles'], 'string', 'max' => 50]
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
            'institution' => 'Institution',
            'graduated' => 'Graduated',
            'major' => 'Major',
            'titles' => 'Titles',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
