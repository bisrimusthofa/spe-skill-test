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

    public static function parityOutlier(array $arr)
    {
        $odd = array();
        $even = array();
    
        foreach ($arr as $val) {
            if ($val % 2 === 0) {
                array_push($even, $val);
            } else {
                array_push($odd, $val);
            }
        }
        
        if(count($even) > count($odd))
        {
            return $odd[0];
        } else if(count($even) === 0 || count($odd) === 0 ) {
            return false;
        } else {
            return $even[0];
        }    
    }

    public static function needleInHaystack(array $array, $needle)
    {
        foreach ($array as $key => $val) {
            if (strcmp($val, $needle) === 0) {
                return $key;
            }
        }

        return false;
    }
}

/**
 * NARCISSISTIC NUMBER
 */
$narcis = SpeSkillTest::findNarcis(153);
echo $narcis;

/**
 * PARITY OUTLIER
 */
$parityOutlier = SpeSkillTest::parityOutlier([160, 3, 1719, 19, 11, 13, -21]);


/**
 * NEEDLE IN THE HAYSTACK
 */
$needleInHaystack = SpeSkillTest::needleInHaystack(["red", "blue", "yellow", "black", "grey"], "blue");