<?php

/**
 * Definition for a singly-linked list.
 */
class ListNode {
    public $val = 0;
    public $next = null;

    function __construct($val) {
        $this->val = $val;
    }
}

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $result = '';
        $tmp = &$result;
        $carry = 0;
        while (true) {
            if ($l1 == null && $l2 == null) {
                if ($carry) {
                    $tmp = new ListNode($carry);
                }
                break;
            }
            if ($l1 != null) {
                $value1 = $l1->val;
                $l1 = $l1->next;
            } else {
                $value1 = 0;
            }
            if ($l2 != null) {
                $value2 = $l2->val;
                $l2 = $l2->next;
            } else {
                $value2 = 0;
            }
            $sum = $value1 + $value2 + $carry;
            if ($sum >= 10) {
                $tmp = new ListNode($sum - 10);
                $carry = 1;
            } else {
                $tmp = new ListNode($sum);
                $carry = 0;
            }
            $tmp = &$tmp->next;
        }
        return $result;
    }
}