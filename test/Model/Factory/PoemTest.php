<?php
namespace LeoGalleguillos\PoemTest\Model\Factory;

use LeoGalleguillos\Poem\Model\Factory as PoemFactory;
use LeoGalleguillos\Poem\Model\Table as PoemTable;
use PHPUnit\Framework\TestCase;

class PoemTest extends TestCase
{
    protected function setUp()
    {
        $this->poemTableMock = $this->createMock(
            PoemTable\Poem::class
        );
        $this->poemFactory = new PoemFactory\Poem(
            $this->poemTableMock
        );
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            PoemFactory\Poem::class,
            $this->poemFactory
        );
    }
}