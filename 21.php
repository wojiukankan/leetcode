<?php

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
    function mergeTwoLists($l1, $l2) {
        $list = new ListNode(null);
        $next = $list;

        while ($l1 != null && $l2 != null) {
            if ($l1->val <= $l2->val) {
                $next->next = $l1;
                $l1 = $l1->next;
            } else {
                $next->next = $l2;
                $l2 = $l2->next;
            }
            $next = $next->next;
        }
        $next->next = $l1 != null ? $l1 : $l2;
        return $list->next;
    }
}

$list1 = new ListNode(1);
$list1->next = new ListNode(2);
//$list1->next->next = new ListNode(4);
//$list1->next->next->next = new ListNode(9);

$list2 = new ListNode(1);
//$list2->next = new ListNode(3);
//$list2->next->next = new ListNode(5);
//$list2->next->next->next = new ListNode(8);

var_dump((new Solution)->mergeTwoLists($list1, $list2));