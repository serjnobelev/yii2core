<?php
namespace app\components;
use yii\base\Behavior;

class MyBehavior extends Behavior
{
    public $prop = 'Behavior Property';
    public $config;
    public $owner;

    public function behaviorAction()
    {
        return __CLASS__ . ' ==>> ' . __METHOD__;
    }
}