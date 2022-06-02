<?php

namespace HmStudio\Controller;

use HmStudio\Utils\RenderView;



class ServiceController
{

    use RenderView;

    public function getService()
    {

        return $this->renderView("serviceView.html.php", array(null));
    }
}