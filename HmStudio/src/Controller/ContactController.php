<?php

namespace HmStudio\Controller;

use HmStudio\Utils\RenderView;

class ContactController{

    use RenderView;

    public function getContact()
    {

        return $this->renderView("contactView.html.php", array(null));
    }
}