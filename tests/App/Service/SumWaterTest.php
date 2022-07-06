<?php

namespace Tests\App\Service;

use PHPUnit\Framework\TestCase;
use App\Service\SumWater;

class SumWaterTest extends TestCase
{

	public function dataToSum(): iterable
	{
		yield [0, [7]];
		yield [0, [9]];
		yield [16, [5, 4, 3, 2, 1, 2, 3, 4, 5]];
		yield [0, [30]];
		yield [214, [7, 10, 2, 5, 13, 3, 4, 10, 5, 9, 4, 2, 6, 5, 18, 6, 8, 6, 15, 4, 20, 4, 8, 9, 5, 21, 4, 7, 19, 2]];
		yield [0, [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]];
		yield [0, [10]];
		yield [0, [10, 9, 8, 7, 6, 5, 4, 3, 2, 1]];
		yield [0, [15]];
		yield [0, [10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10]];
		yield [0, [20]];
		yield [0, [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1]];
		yield [0, []];
	}

	/** @dataProvider dataToSum */
	public function test_sumSilhouetteWater_ExpectsReturnSucceed(int $expected, array $array): void
	{
		$sumWater = new SumWater();
		$this->assertEquals($expected, $sumWater->sum($array));
	}
}
