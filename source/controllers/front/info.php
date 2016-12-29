<?php

class activationbymailinfoModuleFrontController extends ModuleFrontController
{
    public $ssl = false;

    public function initContent()
    {
        parent::initContent();

        $this->setTemplate('info.tpl');
    }
}