<?php

class Page
{
    public $header;
    public $footer;
    public $content;
    public $scripts;
    public $styles;
    public $sideBar;
    public $meta;
    public $title;

    public function render() {
        echo $this->header;
        echo $this->sideBar;
        echo $this->content;
        echo $this->footer;
    }
}