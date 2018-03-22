<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pluses".
 *
 * @property int $id
 * @property string $title_ua
 * @property string $text_ua
 * @property string $title_ru
 * @property string $text_ru
 * @property string $image
 * @property int $number
 */
class Pluses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pluses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_ua', 'text_ua', 'title_ru', 'text_ru', 'number'], 'required'],
            [['number'], 'integer'],
            [['title_ua', 'title_ru', 'image'], 'string', 'max' => 128],
            [['text_ua', 'text_ru'], 'string', 'max' => 512],
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
            'text_ua' => 'Text Ua',
            'title_ru' => 'Title Ru',
            'text_ru' => 'Text Ru',
            'image' => 'Image',
            'number' => 'Number',
        ];
    }

    public function getImage()
    {
        return ($this->image) ? DIRECTORY_SEPARATOR . $this->getImagePath() . $this->image : null;
    }
    
    public function getImagePath()
    {
        return Yii::$app->params['plusesImgPath'];
    }
}
