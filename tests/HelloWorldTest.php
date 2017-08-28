<?php
namespace Jmondi\Blog\Test;

use Jmondi\Blog\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testExecute()
    {
        $helloWorld = new HelloWorld();
        $this->assertSame('Hello World', $helloWorld->execute());
    }
}
