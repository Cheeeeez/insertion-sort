<?php
$array = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];

function insertionSort($list)
{
    for ($i = 1; $i < count($list); $i++) {
        $value = $list[$i];
        $j = $i - 1;
        while ($j >= 0 && $list[$j] < $value) {
            $list[$j + 1] = $list[$j];
            $j--;
        }
        $list[$j + 1] = $value;
    }
    return $list;
}

echo "Original Array:<br>";
echo implode(", ", $array);
echo "<br>Sorted Array: <br>";
echo implode(", ", insertionSort($array));