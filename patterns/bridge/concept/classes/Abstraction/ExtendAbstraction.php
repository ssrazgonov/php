<?php

class ExtendAbstraction extends Abstraction
{
    public function printImplementation() {
        parent::printImplementation();
        echo " and do something Extend on " . $this->implementation->someOperation();
    }
}