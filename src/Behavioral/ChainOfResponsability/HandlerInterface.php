<?php

namespace App\Behavioral\ChainOfResponsability;

interface HandlerInterface
{
    public function setNext(HandlerInterface $handler);
    public function handle(Request $request);

}