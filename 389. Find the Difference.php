class Solution {

/**
 * @param String $s
 * @param String $t
 * @return String
 */
function findTheDifference($s, $t) {
    $s_counts = array_count_values(str_split($s));
    $t_counts = array_count_values(str_split($t));
    return key(array_diff_assoc($t_counts, $s_counts));
}
}