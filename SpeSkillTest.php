<?php

class SpeSkillTest 
{

    public static function findNarcis(int $n)
    {
        $sum = 0;
    	$temp = $n;
    	$digits = strlen($n);
    	
    	while($n != 0) {
    		$r = $n%10; 
    		$sum = $sum+pow($r, $digits);
    		$n = floor($n/10);
    	}
    	
    	return $temp == $sum;
    }
}

/**
 * NARCISSISTIC NUMBER
 */
$narcis = SpeSkillTest::findNarcis(153);
echo $narcis;