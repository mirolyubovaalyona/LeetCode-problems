class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function arraySign($nums) {
    $res = 1 ;
    foreach ($nums as &$value) {
        $res *= $value;
    }
    if ($res > 0 ) return 1;
    if ($res < 0 ) return -1;
    return 0;
}
}