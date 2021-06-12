<?php
/**
 *
 * File  ClientCode.php
 * Author zjr
 * DateTime 2021-06-12 21:39
 **/

namespace RefactoringGuru\Prototype\Conceptual;


class ClientCode
{


    public function index()
    {
        $p1 = new Prototype();
        $p1->primitive = 245;
        $p1->component =  new \DateTime();
        $p1->circularReference = new ComponentWithBackReference($p1);

        $p2 = clone $p1;

        if ($p1->primitive === $p2->primitive) {
            echo "Primitive field values have been carried over to a clone. Yay!\n";
        } else {
            echo "Primitive field values have not been copied. Booo!\n";
        }

    }


}


$clientCodes = new ClientCode();

var_dump($clientCodes->index());
