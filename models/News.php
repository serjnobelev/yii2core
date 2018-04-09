<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $date
 * @property string $time
 * @property string $link
 * @property string $title_ru
 * @property string $title_ua
 * @property string $text_ru
 * @property string $text_ua
 * @property string $image
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'time', 'title_ru', 'title_ua', 'text_ru', 'text_ua'], 'required'],
            [['date', 'time'], 'safe'],
            [['text_ru', 'text_ua'], 'string'],
            [['link', 'title_ru', 'title_ua'], 'string', 'max' => 256],
            [['image'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'time' => 'Time',
            'link' => 'Link',
            'title_ru' => 'Title Ru',
            'title_ua' => 'Title Ua',
            'text_ru' => 'Text Ru',
            'text_ua' => 'Text Ua',
            'image' => 'Image',
        ];
    }

    public static function getAllNews()
    {
        $sql = 'SELECT date, time, link, title_' . Yii::$app->language . ' AS title, text_' . Yii::$app->language . ' AS text, image FROM ' . self::tableName() . ' ORDER BY date and time DESC';
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        return $data;
    }

    public static function getOneNews($id)
    {
        $sql = 'SELECT date, time, link, title_' . Yii::$app->language . ' AS title, text_' . Yii::$app->language . ' AS text, image FROM ' . self::tableName() . ' WHERE id=:id';
        $data = Yii::$app->db->createCommand($sql)->bindValue(':id', $id)->queryOne();
        return $data;
    }

    public static function getLast()
    {
        $sql = 'SELECT date, time, link, title_' . Yii::$app->language . ' AS title FROM ' . self::tableName() . ' LIMIT 5';
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        return $data;
    }

    public function getImage()
    {
        return ($this->image) ? DIRECTORY_SEPARATOR . $this->getImagePath() . $this->image : null;
    }

    public function getImagePath()
    {
        return Yii::$app->params['newsImgPath'];
    }
}
