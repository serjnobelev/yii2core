<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pagetexts".
 *
 * @property int $id
 * @property string $page
 * @property string $head_ua
 * @property string $head_ru
 * @property string $subhead_ua
 * @property string $subhead_ru
 * @property string $descr_ua
 * @property string $descr_ru
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
            [['descr_ua', 'descr_ru'], 'string'],
            [['page'], 'string', 'max' => 32],
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
            'page' => 'Page',
            'head_ua' => 'Head Ua',
            'head_ru' => 'Head Ru',
            'subhead_ua' => 'Subhead Ua',
            'subhead_ru' => 'Subhead Ru',
            'descr_ua' => 'Descr Ua',
            'descr_ru' => 'Descr Ru',
        ];
    }

    public static function getText($page)
    {
        $sql = 'SELECT head_' . Yii::$app->language . ' AS head, subhead_' . Yii::$app->language . ' AS subhead, descr_' . Yii::$app->language . ' AS descr FROM ' . self::tableName() . ' WHERE page=:page';
        $data = Yii::$app->db->createCommand($sql)->bindValue(':page', $page)->queryOne();
        return $data;
    }
}
