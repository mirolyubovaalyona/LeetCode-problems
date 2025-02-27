class Solution {

/**
 * @param String $s
 * @return Boolean
 */
function repeatedSubstringPattern($s) {
    $sLen = strlen($s);
    for ($i = 1; $i <= $sLen / 2 ; $i++) {
        $substr = substr($s, 0, $i);
        $multipleCopies ="";
        for ($j = 0; $j < $sLen / $i; $j++) {
            $multipleCopies.=$substr;
        }
        if ($s == $multipleCopies) return true;
    }
    return false;
}
}