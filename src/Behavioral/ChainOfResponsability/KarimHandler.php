<?php

namespace App\Behavioral\ChainOfResponsability;

class KarimHandler extends AbstractHandler
{
    public function handle(Request $request)
    {
        if( $request->getPriority() === 2 ){
            $request->setDone(true);
            $request->setHandler(self::class);
            return $request;
        }
        //else (search the next handler)
        return parent::handle($request);


    }
}