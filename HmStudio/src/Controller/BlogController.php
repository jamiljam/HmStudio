<?php

namespace HmStudio\Controller;

use HmStudio\Class\Article;
use HmStudio\Utils\RenderView;

class BlogController
{
    use RenderView;

    public function getBlog()
    {
        $articleController= new ArticleController();
        if(!empty(filter_input(INPUT_POST,'submit')))
        {
        $articleController->createArticle();
        }
        $articleController->showAllArticle();
    }
}
