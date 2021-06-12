<?php
/**
 *
 * File  TemplateFactory.php
 * Author junrenzhou
 * DateTime 2021-06-12 17:50
 **/

namespace RefactoringGuru\AbstractFactory\RealWorld;

/**
 * Author junrenzhou
 * Interface TemplateFactory
 * @package RefactoringGuru\AbstractFactory\RealWorld;
 */
interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function creatPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;

}