<?php namespace GdTech\Math\Combinatorics;


class CombinationsTest extends \PHPUnit_Framework_TestCase
{
    function testCombString()
    {
        foreach(new Combinations("1234567", 5) as $substring)
            echo $substring, ' ';
    }

    function testCombArray()
    {
        $array = [['a1', 'a2', 'a3', 'a4'], ['b1','b2','b3'], ['c1','c2','c3'], ['d1','d2']];
        /*
        foreach(new Combinations($array, count($array)) as $substring)
            print_r($substring);
        */
        $cartesianProduct = array_cartesian_product($array);
        echo count($cartesianProduct) . "\n";
        foreach ($cartesianProduct as $item){
            echo implode(',', $item) . "\n";
        }
    }
}