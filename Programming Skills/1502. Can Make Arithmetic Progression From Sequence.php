class Solution {

/**
 * @param Integer[] $arr
 * @return Boolean
 */
function canMakeArithmeticProgression($arr) {
    sort($arr);
    $difference = $arr[1]-$arr[0];
    $n = count($arr);
    for ($i = 1; $i < $n-1; $i++) {
        if ($arr[$i+1]-$arr[$i]!= $difference) return false;
    }
    return true;
}
}