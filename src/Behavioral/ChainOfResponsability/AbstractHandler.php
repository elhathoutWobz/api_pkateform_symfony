<?php

namespace App\Behavioral\ChainOfResponsability;

abstract class AbstractHandler implements HandlerInterface
{

    private HandlerInterface $nextHandler ;

    public function setNext(HandlerInterface $handler):HandlerInterface
    {
        $this->nextHandler = $handler ;

        return $handler;

    }

    public function handle(Request $request)
    {
       // dd($this->nextHandler);

       if($this->nextHandler){

           return $this->nextHandler->handle($request);
       }
       return $request;
    }
}