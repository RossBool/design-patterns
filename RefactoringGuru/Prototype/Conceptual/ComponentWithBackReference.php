<?php
/**
 *
 * File  ComponentWithBackReference.php
 * Author zjr
 * DateTime 2021-06-12 21:33
 **/

namespace RefactoringGuru\Prototype\Conceptual;


class ComponentWithBackReference
{

    public $prototype;


    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;
    }

}