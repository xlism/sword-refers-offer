<?php
/**
 * find duplication number in array
 * array config : 0~n-1, length n
 * User: sammyle
 * Date: 2020-03-21
 * Time: 14:38
 */

/**
 * find duplication number in array
 *
 * @param array $array
 * @return mixed
 */
function duplication(Array $array) {
    if (empty($array)) {
        return FALSE;
    }
    $tmp = $array;
    foreach ($array as $key => $val) {
        unset($tmp[ $key ]);
        if (in_array($val, $tmp)) {
            return $val;
        }
    }

    return 'no duplicate numbers.';
}

/**
 * space O(1) time O(n)
 * @param array $array
 * @return bool|mixed|string
 */
function duplication2(Array $array) {
    if (empty($array)) {
        return FALSE;
    }
    foreach ($array as $key => $val) {
        if ($key != $val) {
            // not in  0 ~ n-1
            if (!isset($array[ $val ])) {
                return FALSE;
            }
            if ($val == $array[ $val ]) {
                return $val;
            } else {
                $tmp = $array[ $val ];
                $array[ $val ] = $val;
                $array[ $key ] = $tmp;
            }
        }
    }

    return 'no duplicate numbers.';
}
// not in 0~n-1
var_dump(duplication2([2, 3, 1, 5]));
// no duplicate numbers
var_dump(duplication2([2, 3, 1, 0]));
// have duplicate numbers 1
var_dump(duplication2([2, 3, 1, 1]));


