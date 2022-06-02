<?php

namespace HmStudio\Controller;

use HmStudio\Utils\RenderView;



class HomePageController
{

    use RenderView;

    public function getHomePage()
    {

        return $this->renderView("index.html.php", array(null));
    }
}
