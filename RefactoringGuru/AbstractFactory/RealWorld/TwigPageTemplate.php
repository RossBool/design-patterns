<?php
/**
 *
 * File  TwigPageTemplate.php
 * Author junrenzhou
 * DateTime 2021-06-12 18:02
 **/

namespace RefactoringGuru\AbstractFactory\RealWorld;


class TwigPageTemplate extends BasePageTemplate
{

    public function getTemplateString(): string
    {
        // TODO: Implement getTemplateString() method.

        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content">{{ content }}</article>
        </div>
        HTML;
    }
}