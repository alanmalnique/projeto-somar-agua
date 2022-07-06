<?php

namespace Tests\App\Service;

use PHPUnit\Framework\TestCase;
use App\Service\SumWater;

class SumWaterTest extends TestCase
{
	public function test_sumSilhouetteWater_ExpectsReturnSucceed(): void
	{
		$sumWater = new SumWater();
		$this->assertEquals(0, $sumWater->sum([7]));
		$this->assertEquals(0, $sumWater->sum([9]));
		$this->assertEquals(16, $sumWater->sum([5, 4, 3, 2, 1, 2, 3, 4, 5]));
		$this->assertEquals(0, $sumWater->sum([30]));
		$this->assertEquals(214, $sumWater->sum([7, 10, 2, 5, 13, 3, 4, 10, 5, 9, 4, 2, 6, 5, 18, 6, 8, 6, 15, 4, 20, 4, 8, 9, 5, 21, 4, 7, 19, 2]));
		$this->assertEquals(0, $sumWater->sum([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));
		$this->assertEquals(0, $sumWater->sum([10]));
		$this->assertEquals(0, $sumWater->sum([10, 9, 8, 7, 6, 5, 4, 3, 2, 1]));
		$this->assertEquals(0, $sumWater->sum([15]));
		$this->assertEquals(0, $sumWater->sum([10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10]));
		$this->assertEquals(0, $sumWater->sum([20]));
		$this->assertEquals(0, $sumWater->sum([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1]));
		$this->assertEquals(0, $sumWater->sum([]));
	}
}
