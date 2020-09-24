<?php

namespace mkrepp\mytestmodule\Controller;

class MyTestController extends \OxidEsales\Eshop\Application\Controller\FrontendController
{

    /**
     *
     * @return string
     */
    public function render()
    {
        parent::render();

        return "mytestcontroller.tpl";
    }
}
