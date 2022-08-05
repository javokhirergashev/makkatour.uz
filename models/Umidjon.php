<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "umidjon".
 *
 * @property int $id
 * @property string $kelmagan_kunlari
 */
class Umidjon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'umidjon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kelmagan_kunlari'], 'required'],
            [['kelmagan_kunlari'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kelmagan_kunlari' => 'Kelmagan Kunlari',
        ];
    }
}
