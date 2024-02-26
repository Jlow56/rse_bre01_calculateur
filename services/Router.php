<?php

class Router
{
    private PageController $pc;
    private CalculController $cc;

    public function __construct()
    {
        $this->pc = new PageController();
        $this->cc = new CalculController();
    }
    public function handleRequest(array $get) : void
    {
        if (isset($get["route"]) && $get["route"] === "home")
        {
            $this->pc->home();
        }
        if(isset($get['route']) && $get['route'] === "calcul") {
            $this->cc->calcul($_POST);
        }
        else
        {
            $this->pc->home();
        }
    }
}