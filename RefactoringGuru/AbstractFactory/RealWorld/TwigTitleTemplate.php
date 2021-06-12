<?php
/**
 *
 * File  TwigTitleTemplate.php
 * Author junrenzhou
 * DateTime 2021-06-12 17:59
 **/

namespace RefactoringGuru\AbstractFactory\RealWorld;


class TwigTitleTemplate implements TitleTemplate
{

    public function getTemplateString(): string
    {
        // TODO: Implement getTemplateString() method.
        return "<h1><?= \$title; ?></h1>";
    }
}