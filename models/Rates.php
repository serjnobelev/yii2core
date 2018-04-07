<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rates".
 *
 * @property int $id
 * @property string $addrLink
 * @property string $addr_ru
 * @property string $addr_ua
 * @property double $floor_rates
 * @property double $another_rates
 * @property double $with_meters
 * @property double $without_meters
 * @property double $watter
 * @property double $drainage
 * @property double $apartment
 */
class Rates extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rates';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['addrLink', 'addr_ru', 'addr_ua', 'floor_rates', 'another_rates', 'with_meters', 'without_meters', 'watter', 'drainage', 'apartment'], 'required'],
            [['floor_rates', 'another_rates', 'with_meters', 'without_meters', 'watter', 'drainage', 'apartment'], 'number'],
            [['addrLink'], 'string', 'max' => 64],
            [['addr_ru', 'addr_ua'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'addrLink' => 'Addr Link',
            'addr_ru' => 'Addr Ru',
            'addr_ua' => 'Addr Ua',
            'floor_rates' => 'Floor Rates',
            'another_rates' => 'Another Rates',
            'with_meters' => 'With Meters',
            'without_meters' => 'Without Meters',
            'watter' => 'Watter',
            'drainage' => 'Drainage',
            'apartment' => 'Apartment',
        ];
    }

    public static function getAddresses()
    {
        $sql = 'SELECT id, addrLink, addr_' . Yii::$app->language . ' AS addr FROM ' . self::tableName() . ' ORDER BY id ASC';
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        return $data;
    }

    public static function getRates($addr)
    {
        $sql = 'SELECT addr_' . Yii::$app->language . ' AS addr, floor_rates, another_rates, with_meters, without_meters, watter, drainage, apartment FROM ' . self::tableName() . ' WHERE addrLink=:addr';
        $data = Yii::$app->db->createCommand($sql)->bindValue(':addr', $addr)->queryOne();
        return $data;
    }
}
