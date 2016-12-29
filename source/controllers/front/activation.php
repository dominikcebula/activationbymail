<?php

class activationbymailactivationModuleFrontController extends ModuleFrontController
{
    public $ssl = false;

    public function initContent()
    {
        parent::initContent();

        $activationbymail = new activationbymail();
        if ($activationbymail->execActivation() === true)
        {
            $this->setTemplate('activation-success.tpl');
        }
        else
        {
            $this->setTemplate('activation-fail.tpl');
        }
    }
}