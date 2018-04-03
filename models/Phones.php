<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phones".
 *
 * @property int $id
 * @property string $title_ua
 * @property string $title_ru
 * @property string $phone
 * @property string $link
 * @property int $number
 */
class Phones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_ua', 'title_ru', 'phone', 'link'], 'required'],
            [['number'], 'integer'],
            [['title_ua', 'title_ru'], 'string', 'max' => 256],
            [['phone', 'link'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ua' => 'Title Ua',
            'title_ru' => 'Title Ru',
            'phone' => 'Phone',
            'link' => 'Link',
            'number' => 'Number',
        ];
    }
}
