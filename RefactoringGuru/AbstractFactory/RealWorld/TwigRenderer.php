<?php
/**
 *
 * File  TwigRenderer.php
 * Author junrenzhou
 * DateTime 2021-06-12 18:05
 **/

namespace RefactoringGuru\AbstractFactory\RealWorld;


class TwigRenderer implements TemplateRenderer
{

    public function render(string $templateString, array $arguments = []): string
    {
        // TODO: Implement render() method.
        extract($arguments);
//        var_dump($arguments);var_dump($templateString);die();
        return 'hello world';
    }
}