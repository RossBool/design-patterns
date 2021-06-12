<?php
/**
 *
 * File  PHPTemplatePageTemplate.php
 * Author junrenzhou
 * DateTime 2021-06-12 18:04
 **/

namespace RefactoringGuru\AbstractFactory\RealWorld;


class PHPTemplatePageTemplate extends BasePageTemplate
{

    public function getTemplateString(): string
    {
        // TODO: Implement getTemplateString() method.
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content"><?= \$content; ?></article>
        </div>
        HTML;
    }
}