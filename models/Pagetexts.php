<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pagetexts".
 *
 * @property int $id
 * @property string $head_ua
 * @property string $head_ru
 * @property string $subhead_ua
 * @property string $subhead_ru
 * @property string $descr_ua
 * @property string $sdescr_ru
 */
class Pagetexts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pagetexts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descr_ua', 'sdescr_ru'], 'string'],
            [['head_ua', 'head_ru'], 'string', 'max' => 512],
            [['subhead_ua', 'subhead_ru'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'head_ua' => 'Head Ua',
            'head_ru' => 'Head Ru',
            'subhead_ua' => 'Subhead Ua',
            'subhead_ru' => 'Subhead Ru',
            'descr_ua' => 'Descr Ua',
            'sdescr_ru' => 'Sdescr Ru',
        ];
    }
}
