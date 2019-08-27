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
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $j = $head;
        $i = &$head;
        $dec = 0;
        while ($j->next != null) {
            $j = $j->next;
            $dec++;
            if ($dec >= $n) {
                $i = &$i->next;
            }
        }
        $i = $i->next;
        return $head;
    }
}

$list = new ListNode(1);
$list->next = new ListNode(2);
$list->next->next = new ListNode(4);
$list->next->next->next = new ListNode(5);

var_dump((new Solution)->removeNthFromEnd($list, 2));