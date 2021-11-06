<?php

interface PageBuilder {
    public function reset()              : PageBuilder;
    public function setScripts()         : PageBuilder;
    public function setStyles()          : PageBuilder;
    public function setMeta($keywords, $description)            : PageBuilder;
    public function setTitle($title)           : PageBuilder;
    public function setHeader()          : PageBuilder;
    public function setSideBar()         : PageBuilder;
    public function setContent($content) : PageBuilder;
    public function setFooter()          : PageBuilder;
}