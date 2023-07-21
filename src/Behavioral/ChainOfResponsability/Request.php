<?php

namespace App\Behavioral\ChainOfResponsability;

class Request
{
 private bool $done = false;
 private string $handler;

 private $priority = 0 ;

    /**
     * @return bool
     */
    public function isDone(): bool
    {
        return $this->done;
    }

    /**
     * @param bool $done
     * @return Request
     */
    public function setDone(bool $done): Request
    {
        $this->done = $done;
        return $this;
    }

    /**
     * @return string
     */
    public function getHandler(): string
    {
        return $this->handler;
    }

    /**
     * @param string $handler
     * @return Request
     */
    public function setHandler(string $handler): Request
    {
        $this->handler = $handler;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     * @return Request
     */
    public function setPriority(int $priority): Request
    {
        $this->priority = $priority;
        return $this;
    }

}