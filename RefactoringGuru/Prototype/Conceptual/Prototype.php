<?php
/**
 *
 * File  Prototype.php
 * Author zjr
 * DateTime 2021-06-12 21:27
 **/

namespace RefactoringGuru\Prototype\Conceptual;


class Prototype
{
    /**
     * @var
     */
    public $primitive;
    public $component;
    public $circularReference;


    public function __clone()
    {
        $this->component = clone $this->component;
        $this->circularReference = clone $this->circularReference;
        $this->circularReference->property = $this;

    }

}