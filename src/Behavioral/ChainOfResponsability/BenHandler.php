<?php

namespace App\Behavioral\ChainOfResponsability;

class BenHandler extends AbstractHandler
{
    public function handle(Request $request)
    {
        if( $request->getPriority() === 1 ){
            $request->setDone(true);
            $request->setHandler(self::class);
            return $request;
        }
        //else (search the next handler)
        return parent::handle($request);


    }

}