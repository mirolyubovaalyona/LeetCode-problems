class Solution {

/**
 * @param Integer[] $nums
 * @return NULL
 */
function moveZeroes(&$nums) {
    $n = count($nums);
    $nonZeroIndex = 0;
    // Перемещаем все ненулевые элементы в начало массива
    for ($i = 0; $i < $n; $i++) {
        if ($nums[$i] !== 0) {
            $nums[$nonZeroIndex++] = $nums[$i];
        }
    }
    // Заполняем оставшуюся часть массива нулями
    for ($i = $nonZeroIndex; $i < $n; $i++) {
        $nums[$i] = 0;
    }
}
}