<?php

namespace Demo;

use PHPUnit\Framework\TestCase;

class DemoTest extends TestCase
{
public function testHello(){
    $obj=new Demo;
    $this->assertSame("Hello",$obj->hello());
}

}
