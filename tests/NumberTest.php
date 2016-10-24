<?php

use Edujugon\Core\Number;

class NumberTest extends PHPUnit_Framework_TestCase {

    /** @test */
    public function get_array_of_years()
    {
        $yearList = Number::MyList(Date('Y'),-2);

        var_dump($yearList);
        $this->assertInternalType('array',$yearList);
        $this->assertCount(3,$yearList);
    }

}
