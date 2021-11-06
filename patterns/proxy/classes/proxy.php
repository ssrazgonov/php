<?php

class Proxy implements ProxyInterface {
    public  $service;

    public function __construct()
    {
        $this->service = new Service();
    }

    public function make()
    {
        $result = "Start proxy to service <br/>";
        $result .= $this->service->make();
        $result .= "<br/> End of service operation";

        return $result;
    }
}