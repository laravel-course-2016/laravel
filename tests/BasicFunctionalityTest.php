<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicFunctionalityTest extends TestCase
{
    public function testBasicFunctionality()
    {
        $this->visit('/')->see('Dmitrii Iurev');
        $this->visit('/about.html')->see('Обо мне');
        $this->visit('/feedback.html')->see('Обратная связь');
        //$this->visitRoute('site.main.index')->see('Dmitrii Iurev');
    }

    public function testBasicNavigation()
    {
        $this->visit('/')
            ->click('Написать мне')
            ->seePageIs('/feedback.html');
    }

    /*public function testResponse()
    {
        $response = $this->call('GET', 'test/test1');
        $this->assertEquals('Hello World', $response->getContent());
        $this->assertResponseOk();
    }*/
}
