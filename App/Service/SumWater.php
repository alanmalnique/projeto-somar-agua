<?php

namespace App\Service;

class SumWater 
{
    public function sum(array $arr = []): int
    {
        $n = count($arr) - 1;
        $sum = $leftMax = $rightMax = $lower = 0; 

        if ($n < 0 || $n > 99) {
            return 0;
        }        

        while ($lower <= $n) {
            if ($arr[$lower] < $arr[$n]) {
                if ($arr[$lower] > $leftMax) {
                    $leftMax = $arr[$lower];
                } else {
                    $sum += $leftMax - $arr[$lower];
                    $lower++;
                }
                continue;
            }

            if ($arr[$n] > $rightMax) {
                $rightMax = $arr[$n];
            } else {
                $sum += $rightMax - $arr[$n];
                $n--;
            }
        }
      
        return $sum;
    }

}
