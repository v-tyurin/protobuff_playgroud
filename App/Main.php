<?php


namespace App;



use Protobuff\Person;

class Main
{
    public function __construct()
    {

        $protoMsg = new Person(['age'=>12,'name'=>'test']);
        $protoMsg->setAge(12);
        $protoMsg->setIsProfileVerified(false);
        $protoMsg->setSmallPicture('test');
        var_dump($protoMsg->serializeToJsonString());
        var_dump($protoMsg->serializeToString());
    }

}