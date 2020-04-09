<?php


class StopWatch
{
    private $startTime ;
    private $endTime ;

    public function __construct()
    {
        $this ->startTime;
    }
    public function start(){
        return $this->startTime = date('h:m:s');
    }
    public function stop(){
        return $this->endTime = date('h:m:s');
    }
    public function getElapsedTime(){
        return microtime(strtotime($this ->endTime) - strtotime($this ->startTime));
    }
}