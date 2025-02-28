class Solution {

/**
 * @param Integer[] $digits
 * @return Integer[]
 */
function plusOne($digits) {
     $n = count($digits);
     while ($n > 0) {
        if ($digits[$n-1] < 9) {
            $digits[$n-1]+=1;
            return $digits;
        } else {
            $digits[$n-1] = 0;
            $n --;
        }
    }
    array_unshift($digits, 1);
    return $digits;
}
}