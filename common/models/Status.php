<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property int $id_status
 * @property string $status
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status'], 'string', 'max' => 35],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_status' => Yii::t('app', 'Id Status'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
