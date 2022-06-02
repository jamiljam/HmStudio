<?php

namespace HmStudio\Controller;

use HmStudio\Utils\RenderView;

class AproposController{

    use RenderView;

    public function getApropos()
    {

        return $this->renderView("aproposView.html.php", array(null));
    }
}