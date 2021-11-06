<?php

class PageDirector
{
    private $builder;

    public function __construct(PageBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function buildPage($keywords, $description, $title) {
        $this->builder->reset()->setScripts()
            ->setStyles()
            ->setMeta($keywords, $description)
            ->setTitle($title)
            ->setHeader()
            ->setSideBar()
            ->setFooter();
    }

    public function buildPageNoStyles($keywords, $description, $title) {
        $this->builder->reset()->setScripts()
            ->setMeta($keywords, $description)
            ->setTitle($title)
            ->setHeader()
            ->setSideBar()
            ->setFooter();
    }
}