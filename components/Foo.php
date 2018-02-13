<?php
namespace app\components;

use yii\base\BaseObject;

class Foo extends BaseObject
{
    private $_label;
    public $_data;
    public function getLabel()
    {
        return $this->_label;
    }
    public function setLabel($value)
    {
        $this->_label = (int)$value;
    }

    public function setData($value)
    {
        $this->_data = $value;
    }

    public function getData()
    {
        return $this->_data;
    }
}