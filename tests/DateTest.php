<?php

use Edujugon\Core\Date;

class DateTest extends PHPUnit_Framework_TestCase {

    /**  @test */
    public function get_months()
    {
        $months = Date::Months();
        $this->assertInternalType('array',$months);
    }

    /** @test */
    public function get_months_in_spanish()
    {
        $months = Date::Months('es');
        $this->assertContains('Enero',$months);
    }

    /** @test */
    public function get_two_last_months()
    {
        $months = Date::Months(null,-2);

        $this->assertEquals(['November','December'],$months);
    }

}