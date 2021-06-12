<?php
/**
 *
 * File  TemplateRenderer.php
 * Author junrenzhou
 * DateTime 2021-06-12 18:04
 **/

namespace RefactoringGuru\AbstractFactory\RealWorld;


interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;

}