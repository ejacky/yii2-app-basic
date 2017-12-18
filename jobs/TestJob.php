<?php
namespace app\jobs;
use yii\base\BaseObject;

class TestJob extends BaseObject implements \yii\queue\JobInterface
{
    public $msg;
    public function execute($queue)
    {
        echo $this->msg;
    }
}


