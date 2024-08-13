<?php

class Solution
{
    private const MAP = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    /**
     * @param string $s
     * @return int
     */
    function romanToInt1(string $s): int
    {
        $arr = str_split($s);
        $result = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $val = $arr[$i];
            if (isset($arr[$i + 1]) && self::MAP[$arr[$i]] < self::MAP[$arr[$i + 1]]) {
                $result += self::MAP[$arr[$i + 1]] - self::MAP[$arr[$i]];
                $i++;
                continue;
            }
            $result += self::MAP[$val];
        }
        return $result;
    }

    /**
     * @param string $s
     * @return int
     */
    function romanToInt2(string $s): int
    {
        $arr = str_split($s);
        $result = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $val = $arr[$i];
            if (isset($arr[$i + 1]) && self::MAP[$arr[$i]] < self::MAP[$arr[$i + 1]]) {
                $result += self::MAP[$arr[$i + 1]] - self::MAP[$arr[$i]];
                $i++;
                continue;
            }
            $result += self::MAP[$val];
        }
        return $result;
    }
}
