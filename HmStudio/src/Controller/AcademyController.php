<?php

namespace HmStudio\Controller;

use HmStudio\Utils\RenderView;

class AcademyController{

    use RenderView;

    public function getAcademy()
    {

        return $this->renderView("academyView.html.php", array(null));
    }
}