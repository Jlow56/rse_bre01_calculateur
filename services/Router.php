<?php

class Router
{
    private PageController $pc;

    public function __construct()
    {
        $this->pc = new PageController();
    }
    public function handleRequest(array $get) : void
    {
        if (isset($get["route"]) && $get["route"] === "home")
        {
            $this->pc->home();
        }
        else
        {
            $this->pc->home();
        }
    }
}