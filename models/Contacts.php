<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $sales_addr_ru
 * @property string $sales_addr_ua
 * @property string $phone_city
 * @property int $phone_city_link
 * @property string $phone_kyivstar
 * @property int $phone_kyivstar_link
 * @property string $phone_vodafone
 * @property int $phone_vodafone_link
 * @property string $schedule1_ru
 * @property string $schedule1_ua
 * @property string $schedule2_ru
 * @property string $schedule2_ua
 * @property string $phone_supply
 * @property int $phone_supply_link
 * @property string $facebook
 * @property string $instagram
 * @property string $viber
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sales_addr_ru', 'sales_addr_ua', 'phone_city', 'phone_city_link', 'phone_kyivstar', 'phone_kyivstar_link', 'phone_vodafone', 'phone_vodafone_link', 'schedule1_ru', 'schedule1_ua', 'schedule2_ru', 'schedule2_ua', 'phone_supply', 'phone_supply_link'], 'required'],
            [['phone_city_link', 'phone_kyivstar_link', 'phone_vodafone_link', 'phone_supply_link'], 'integer'],
            [['sales_addr_ru', 'sales_addr_ua', 'facebook', 'instagram'], 'string', 'max' => 128],
            [['phone_city', 'phone_city_link', 'phone_kyivstar', 'phone_kyivstar_link', 'phone_vodafone', 'phone_vodafone_link', 'schedule1_ru', 'schedule1_ua', 'schedule2_ru', 'schedule2_ua', 'phone_supply', 'phone_supply_link'], 'string', 'max' => 32],
            [['viber'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sales_addr_ru' => 'Sales Addr Ru',
            'sales_addr_ua' => 'Sales Addr Ua',
            'phone_city' => 'Phone City',
            'phone_city_link' => 'Phone City Link',
            'phone_kyivstar' => 'Phone Kyivstar',
            'phone_kyivstar_link' => 'Phone Kyivstar Link',
            'phone_vodafone' => 'Phone Vodafone',
            'phone_vodafone_link' => 'Phone Vodafone Link',
            'schedule1_ru' => 'Schedule1 Ru',
            'schedule1_ua' => 'Schedule1 Ua',
            'schedule2_ru' => 'Schedule2 Ru',
            'schedule2_ua' => 'Schedule2 Ua',
            'phone_supply' => 'Phone Supply',
            'phone_supply_link' => 'Phone Supply Link',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'viber' => 'Viber',
        ];
    }

    public static function getContacts()
    {
        $sql = 'SELECT *, sales_addr_' . Yii::$app->language . ' AS sales_addr, schedule1_' . Yii::$app->language . ' AS schedule1, schedule2_' . Yii::$app->language . ' AS schedule2 FROM ' . self::tableName();
        $data = Yii::$app->db->createCommand($sql)->queryOne();
        return $data;
    }
}
