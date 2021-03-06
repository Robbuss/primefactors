<?php

namespace spec;

use Prime;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Prime::class);
    }

    function it_returns_an_empty_array_for_1()
    {
        $this->generate(1)->shouldReturn([]);
    }

    function it_returns_2_for_2()
    {
        $this->generate(2)->shouldReturn([2]);
    }

    function it_returns_3_for_3()
    {
        $this->generate(3)->shouldReturn([3]);
    }

    function it_returns_2_2_for_4()
    {
        $this->generate(4)->shouldReturn([2, 2]);
    }

    function it_returns_5_for_5()
    {
        $this->generate(5)->shouldReturn([5]);
    }

    function it_returns_2_3_for_6()
    {
        $this->generate(6)->shouldReturn([2, 3]);
    }

    function it_returns_7_for_7()
    {
        $this->generate(7)->shouldReturn([7]);
    }

    function it_returns_2_2_2_for_8()
    {
        $this->generate(8)->shouldReturn([2, 2, 2]);
    }

    function it_returns_3_3_for_9()
    {
        $this->generate(9)->shouldReturn([3, 3]);
    }

    function it_should_return_number()
    {
        $this->reverse([0])->shouldReturn(0);
    }

    function it_with_incorrect_parameter()
    {
        $this->reverse(10)->shouldReturn('Prime should be an array');
    }
}
