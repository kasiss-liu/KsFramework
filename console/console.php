<?php
/**
 * Created by PhpStorm.
 * User: kasiss
 * Date: 6/12/16
 * Time: 23:48
 */

class console extends KsfConsole
{
    public function init()
    {

    }
    public function error()
    {
        $error = Ksf::getInstance()->error;
        print_r($error);
    }
    public function run()
    {
        var_dump(new Sample_Sample_SampleModel());
    }
}
