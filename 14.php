<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $prefix = '';
        $first = array_pop($strs);
        $i = 0;
        while (isset($first[$i])) {
            foreach ($strs as $item) {
                if ($item[$i] != $first[$i]) {
                    break 2;
                }
            }
            $prefix .= $first[$i];
            $i++;
        }
        return $prefix;
    }
}

var_dump((new Solution)->longestCommonPrefix(['acb', 'acs']));