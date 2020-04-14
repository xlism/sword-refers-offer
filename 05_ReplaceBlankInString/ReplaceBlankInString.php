<?php
/**
 * replace blank in string
 * User: sammy le
 * Date: 2020-04-14
 * Time: 17:31
 */

/**
 * 替换字符串中的空格
 * 在原字符串上进行替换，不可创建新的字符串，并且字符串后面有足够多的空余内存
 * Class ReplaceBlankInString
 */
class ReplaceBlankInString
{
    public function replace($string)
    {
        if (empty($string)) {
            return $string;
        }
        $blankCount = 0;
        $length = strlen($string);
        for ($i = 0; $i < $length; $i++) {
            if ($string[$i] == ' ') {
                $blankCount++;
            }
        }
        if ($blankCount === 0) {
            return $string;
        }
        $newLength = $length + $blankCount * 2;
        $string = str_pad($string, $newLength, ' ', STR_PAD_RIGHT);
        for ($i = $length - 1; $i >= 0; $i--) {
            if ($i == $newLength) {
                break;
            }
            if ($string[$i] == ' ') {
                $string[--$newLength] = '0';
                $string[--$newLength] = '2';
                $string[--$newLength] = '%';
            } else {
                $string[--$newLength] = $string[$i];
            }
        }

        return $string;
    }
}

//test case
$t = new ReplaceBlankInString();
$testCase = [
    'happy!',
    'we are happy!',
    ' we are happy!',
    '  we are happy!',
    'we  are happy!',
    'we are happy! ',
    'we are happy!  ',
    '',
    '   ',
    null
];
foreach ($testCase as $case) {
    echo $case . ' test result:' . PHP_EOL;
    $s = $t->replace($case);
    var_dump($s);
}