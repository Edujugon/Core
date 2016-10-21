<?php

use Edujugon\Core\Date;

class DateTest extends PHPUnit_Framework_TestCase {

    /**  @test */
    public function get_months()
    {
        $months = Date::getMonths();
        $this->assertInternalType('array',$months);
    }

    /** @test */
    public function get_months_in_spanish()
    {
        $months = Date::getMonths('es');
        $this->assertContains('Enero',$months);
    }

    /** @test */
    public function get_two_last_months()
    {
        $months = Date::getMonths(null,-2);

        $this->assertEquals(['November','December'],$months);
    }
}