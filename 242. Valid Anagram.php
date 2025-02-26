class Solution {

/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isAnagram($s, $t) {
    $s_counts = array_count_values(str_split($s));
    $t_counts = array_count_values(str_split($t));
    if ($s_counts == $t_counts ) return true;
    return false;
}
}