<?php
require '../controleur/C4AI.php';
use PHPUnit\Framework\TestCase;
 
class C4AITests extends TestCase
{
    private $c4ai;
 
    protected function setUp()
    {
        $this->c4ai = C4AI::getInstance();
    }
 
    protected function tearDown()
    {
        $this->c4ai = NULL;
    }

    /**
     * @dataProvider boardforexcpected
     */
    public function testAdd($board , $excpected)
    {
        $result = $this->c4ai->getBestPos($board, 2);
        $this->assertEquals($excpected, $result);
    }

    public function boardforexcpected()
    {
        //Avec ces exemples on presque tester tous les cas ou la machine doit prendre une decision bien specifique
        return [
            //vertical
            [array(
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0),
            array(1, 0, 0, 0, 0, 0, 0),
            array(1, 2, 0, 0, 0, 0, 0),
            array(1, 2, 0, 0, 0, 0, 0)
            ) , 0],
            //horizontal
            [array(
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0),
            array(2, 0, 0, 0, 0, 0, 0),
            array(1, 1, 0, 0, 0, 0, 0),
            array(1, 2, 0, 1, 0, 0, 0),
            array(1, 2, 2, 2, 0, 0, 0)
            ), 4],
            //diagonal
            [array(
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 1, 2, 0, 0, 0),
            array(1, 1, 2, 2, 0, 0, 0),
            array(1, 2, 2, 1, 0, 0, 0)
            ), 3],
            //diagonal 
            [array(
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0),
            array(2, 0, 0, 0, 0, 0, 0),
            array(1, 2, 0, 0, 0, 0, 0),
            array(1, 1, 2, 0, 0, 0, 0),
            array(1, 2, 1, 0, 0, 0, 0)
            ), 3],
            //diagonal
            [array(
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 1, 2, 2, 0, 0),
            array(1, 1, 2, 2, 1, 0, 0),
            array(1, 2, 1, 1, 2, 0, 0)
            ), 4],
            [array(
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 1, 2, 0, 0),
            array(0, 0, 0, 2, 1, 2, 0),
            array(0, 0, 0, 2, 1, 0, 2)
            ),3],
            [array(
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 2),
            array(0, 0, 0, 0, 0, 0, 2),
            array(0, 0, 1, 2, 1, 0, 2)
            ),6],
            [array(
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 2, 0, 0, 0),
            array(0, 1, 0, 1, 1, 2, 2),
            array(0, 2, 1, 2, 1, 1, 2)
            ),2],
        ];
    }
 
}