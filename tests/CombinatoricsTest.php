<?php namespace GdTech\Math\Combinatorics;


class CombinatoricsTest extends \PHPUnit_Framework_TestCase
{
    function prettyPrint(array $multi_dimension_array)
    {
        echo "-------------\n";
        echo "总计:" .count($multi_dimension_array) . "个\n";
        echo "-------------\n";
        foreach ($multi_dimension_array as $arr){
            echo implode(',', $arr) . "\n";
        }
    }

    function testCombinations()
    {
        $combinatorics = new Combinatorics();
        $sample = array_unique([
            'one'   => 'a',
            'two'   => 'b',
            'three' => 'c',
            'four'  => 'd',
            'five'  => 'e',
            'six'   => 'f',
            'seven' => 'g',
            'eight' => 'h'
        ]);
        $result = $combinatorics->combinations($sample, 3);
        $this->prettyPrint($result);
    }

    function testPermutations()
    {
        $combinatorics = new Combinatorics();
        $sample = array_unique([
            'one'   => 'a',
            'two'   => 'b',
            'three' => 'c',
            'four'  => 'd',
            'five'  => 'e',
            'six'   => 'f',
            'seven' => 'g',
            'eight' => 'h'
        ]);
        $result = $combinatorics->permutations($sample, 3);
        $this->prettyPrint($result);
    }
}