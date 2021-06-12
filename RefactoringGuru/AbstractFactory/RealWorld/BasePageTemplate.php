<?php
/**
 *
 * File  BasePageTemplate.php
 * Author junrenzhou
 * DateTime 2021-06-12 18:01
 **/

namespace RefactoringGuru\AbstractFactory\RealWorld;


abstract class BasePageTemplate implements PageTemplate
{
    protected $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}