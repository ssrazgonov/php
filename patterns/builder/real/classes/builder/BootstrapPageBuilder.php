<?php

class BootstrapPageBuilder implements PageBuilder
{
    private $page;
    private $styles;

    public function __construct() {
        $this->page = new Page();
    }

    public function reset() : PageBuilder {
        $this->page = new Page();
        $this->page->scripts = [];
        $this->page->styles = [];
        $this->page->meta = [];
        return $this;
    }

    public function setScripts() : PageBuilder
    {
        $this->page->scripts = [
            "/js/bootstrap.min.js",
            "/js/jquery"
        ];
        return $this;
    }


    public function setStyles(): PageBuilder
    {
        $this->page->styles = [
            "/css/bootstrap.min.css",
            "/css/styles.css"
        ];
        return $this;
    }

    public function setMeta($keywords = "", $description = ""): PageBuilder
    {
        $this->page->meta = [
            ["type" => "keywords", "value" => $keywords],
            ["type" => "description", "value" => $description],
        ];
        return $this;
    }

    public function setTitle($title): PageBuilder
    {
        $this->page->title = $title;
        return $this;
    }

    public function setHeader() : PageBuilder
    {
        $meta = "";

        foreach ($this->page->meta as $item) {
            $meta .= <<<HTML
            <meta content="{$item["value"]}"> 
            HTML;
        }

        $this->page->header  = <<<HTML
            <!doctype html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            {$meta}                            
            <title>{$this->page->title}</title>

        HTML;

        foreach ($this->page->scripts as $script) {
            $this->page->header .= <<<HTML
                <script src="{$script}"></script>

            HTML;
        }

        foreach ($this->page->styles as $style) {
            $this->page->header .= <<<HTML
                <link rel="stylesheet" href="{$style}">

            HTML;
        }

        $this->page->header .= <<<HTML
            </head>
            <body>
        HTML;


        return $this;
    }

    public function setFooter() : PageBuilder
    {
        $this->page->footer = <<<HTML
        </body>
        </html>
        HTML;

        return $this;
    }

    public function setSideBar(): PageBuilder
    {
        $this->page->sideBar = "";
        return $this;
    }

    public function setContent($content): PageBuilder
    {
        $this->page->content = $content;

        return $this;
    }

    public function getPage() : Page {
        return $this->page;
    }
}