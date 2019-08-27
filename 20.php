<?php

class Solution {

    private $config = [
        '(' => ')',
        '[' => ']',
        '{' => '}',
    ];

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $arr = [];
        $i = 0;
        while (isset($s[$i])) {
            $last = array_pop($arr);
            if (!isset($this->config[$last]) || $this->config[$last] != $s[$i]) {
                if ($last) $arr[] = $last;
                $arr[] = $s[$i];
            }
            $i++;
        }
        return empty($arr) ? true : false;
    }
}

var_dump((new Solution)->isValid('()'));