<?php
/**
 *
 * File  Page.php
 * Author junrenzhou
 * DateTime 2021-06-12 18:07
 **/

namespace RefactoringGuru\AbstractFactory\RealWorld;

require '../../../vendor/autoload.php';

/**
 * Author zjr
 * Class Page
 * @package RefactoringGuru\AbstractFactory\RealWorld
 */
class Page
{

    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $content;

    public function __construct($content, $title)
    {
        $this->content = $content;
        $this->title = $title;
    }

    public function render(TemplateFactory $factory): string
    {

        $PageTemplate = $factory->creatPageTemplate();
        $renderer = $factory->getRenderer();
        $email = 'na\\me@exam\\ple.com';
        $domain = strstr($email, '\\') . PHP_EOL;
        echo $domain; // 打印 @example.com
        return $renderer->render($PageTemplate->getTemplateString(), [
            'title' => $this->title,
            'content' => $this->content
        ]);

    }

}

$page = new Page('Sample page', 'This it the body.');

echo "\n";

echo $page->render(new PHPTemplateFactory());