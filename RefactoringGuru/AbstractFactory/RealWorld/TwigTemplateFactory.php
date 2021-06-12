<?php
/**
 *
 * File  TwigTemplateFactory.php
 * Author junrenzhou
 * DateTime 2021-06-12 17:53
 **/

namespace RefactoringGuru\AbstractFactory\RealWorld;


class TwigTemplateFactory implements TemplateFactory
{

    public function createTitleTemplate(): TitleTemplate
    {
        // TODO: Implement createTitleTemplate() method.

        return new TwigTitleTemplate();
    }

    public function creatPageTemplate(): PageTemplate
    {
        // TODO: Implement creatPageTemplate() method.
        return  new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        // TODO: Implement getRenderer() method.
        return new TwigRenderer();
    }
}