class Solution {

/**
 * @param String $word1
 * @param String $word2
 * @return String
 */
function mergeAlternately($word1, $word2) {
    $res = '';
    while ($word1 != '' || $word2!= ''){
        $res = $res . substr($word1, 0, 1) . substr($word2, 0, 1);
        $word1 = substr($word1, 1);
        $word2 = substr($word2, 1);
    }
    $res = $res . $word1 . $word2;
    return $res;
}
}