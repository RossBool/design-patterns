<?php
/**
 *
 * File  PHPTemplateFactory.php
 * Author junrenzhou
 * DateTime 2021-06-12 17:56
 **/

namespace RefactoringGuru\AbstractFactory\RealWorld;

/**
 * Author junrenzhou
 * Class PHPTemplateFactory
 * @package RefactoringGuru\AbstractFactory\RealWorld;
 */
class PHPTemplateFactory implements TemplateFactory
{

    public function createTitleTemplate(): TitleTemplate
    {
        // TODO: Implement createTitleTemplate() method.
        return new TwigTitleTemplate();

    }

    public function creatPageTemplate(): PageTemplate
    {
        // TODO: Implement creatPageTemplate() method.
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        // TODO: Implement getRenderer() method.
        return new TwigRenderer();

    }
}