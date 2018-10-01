<?php


namespace Tests\AppBundle\Entity;


use AppBundle\Entity\Dinosaur;
use PHPUnit\Framework\TestCase;

class DinosaurTest extends TestCase
{
    public function testThatYourComputerWorks()
    {
        $this->assertTrue(true);
    }

    public function testSettingLength()
    {
        $dinosaur = new Dinosaur();

        $this->assertSame(0,$dinosaur->getlength());
    }

}