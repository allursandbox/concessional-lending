<?php

class ConcessionalLending implements ConcessionalLendingInterface
{
    public $contractNumbers;

    public function __construct($contractNumbers)
    {
        $this->contractNumbers = mb_strtolower($contractNumbers);
    }

    public function getQueue()
    {

    }
}