<?php


namespace App;



use Protobuff\Front\Ticket;
use Protobuff\Person;

class Main
{
    public function __construct()
    {

        $protoMsg = new Person(['age'=>12,'name'=>'test']);
        $protoMsg->setAge(12);
        $protoMsg->setIsProfileVerified(false);
        $protoMsg->setSmallPicture('test');
        $ticket = new Ticket(['phone'=>'123','name'=>'111']);

        $protoMsg->setTickets([$ticket]);
        $tickets = $protoMsg->getTickets();
        foreach ($tickets as $ticket){
            $aa = new Ticket();
            $aa->mergeFrom($ticket); // GET DATA FROM MESSAGE
        }
        $protoMsg->setTickets([$ticket]);
        $protoMsg->setTickets([$ticket]);
        var_dump($protoMsg->serializeToJsonString());
        var_dump($protoMsg->serializeToString());
    }

}