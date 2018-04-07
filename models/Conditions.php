<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "conditions".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_ua
 * @property string $text_ru
 * @property string $text_ua
 * @property string $image
 * @property string $type
 */
class Conditions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'conditions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_ru', 'title_ua', 'text_ru', 'text_ua'], 'required'],
            [['title_ru', 'title_ua'], 'string', 'max' => 128],
            [['text_ru', 'text_ua'], 'string', 'max' => 512],
            [['image'], 'string', 'max' => 64],
            [['type'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ru' => 'Title Ru',
            'title_ua' => 'Title Ua',
            'text_ru' => 'Text Ru',
            'text_ua' => 'Text Ua',
            'image' => 'Image',
            'type' => 'Type',
        ];
    }

    public static function getConditions($type)
    {
        $sql = 'SELECT title_' . Yii::$app->language . ' AS title, text_' . Yii::$app->language . ' AS text, image FROM ' . self::tableName() . ' WHERE type=:type';
        $data = Yii::$app->db->createCommand($sql)->bindValue(':type', $type)->queryAll();
        return $data;
    }
}
