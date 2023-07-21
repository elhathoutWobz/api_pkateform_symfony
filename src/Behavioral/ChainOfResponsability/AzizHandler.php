<?php

namespace App\Behavioral\ChainOfResponsability;

class AzizHandler extends AbstractHandler
{
    public function handle(Request $request)
    {
        if( $request->getPriority() === 3 ){
            $request->setDone(true);
            $request->setHandler(self::class);
            return $request;
        }
        //else (search the next handler)
        return parent::handle($request);


    }
}