<?php


namespace App\Tests;


use App\Controller\DefaultController;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

    public function testIndex()
    {
        $default = new DefaultController();
        $this->assertEquals(true,$default->index());
    }

}
