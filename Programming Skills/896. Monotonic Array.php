class Solution {

/**
 * @param Integer[] $nums
 * @return Boolean
 */
function isMonotonic($nums) {
    $n = count($nums);
    $increasing = true;
    $decreasing = true;
    for ($i = 1; $i < $n; $i++) {
        if ($nums[$i] > $nums[$i - 1]) {
            $decreasing = false;
        } elseif ($nums[$i] < $nums[$i - 1]) {
            $increasing = false;
        }
        if (!$increasing && !$decreasing) {
            return false;
        }
    }
    return true;
}
}