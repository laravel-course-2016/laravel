<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FormatDateTest extends TestCase
{
    protected $dateTime;

    protected function setUp()
    {
        parent::setUp();
        $this->dateTime = date('2017-01-01 00:00:00');
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    public function testNorm()
    {
        $this->assertEquals('Воскресенье, 01 января 2017 00:00', getRusDate($this->dateTime));
    }

    /**
     * A basic test example.
     *
     * @expectedException \InvalidArgumentException
     * @return void
     */
    /*public function testNull()
    {
        $this->assertEquals('', getRusDate(null));
    }*/

    /**
     * A basic test example.
     *
     * @expectedException \ErrorException
     * @return void
     */
    /*public function testInvalidArgument()
    {
        //$this->assertEquals('', getRusDate(123));
        $this->assertEquals('', getRusDate(true));
        $this->assertEquals('', getRusDate(new \stdClass()));
    }*/
}
