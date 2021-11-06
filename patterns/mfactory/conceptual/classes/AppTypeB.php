<?php

class AppTypeB extends App
{

    public function makeProduct(): productInterface
    {
        return new productB();
    }
}