<?php

namespace HmStudio\Utils;

trait RenderView
{
public function __construct(){
}


public function renderView(string $file, array $variables){


$variables;

include sprintf(__DIR__.'/../../View/%s',$file);

}
}