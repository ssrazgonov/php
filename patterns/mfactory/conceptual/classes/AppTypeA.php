<?php

class AppTypeA extends App
{

    public function makeProduct(): productInterface
    {
        return new productA();
    }
}