package main

import "fmt"

type ListNode struct {
	Val  int
	Next *ListNode
}

func main() {
	l1 := &ListNode{1, nil}
	l2 := &ListNode{9, &ListNode{9, nil}}
	a := addTwoNumbers(l1, l2)
	fmt.Print(a)
}

func addTwoNumbers(l1 *ListNode, l2 *ListNode) *ListNode {
	var new, next *ListNode
	carry := 0
	for l1 != nil || l2 != nil {
		tmp := 0
		tmp = tmp + carry
		carry = 0
		if l1 != nil {
			tmp = tmp + l1.Val
			l1 = l1.Next
		}
		if l2 != nil {
			tmp = tmp + l2.Val
			l2 = l2.Next
		}
		if tmp >= 10 {
			tmp = tmp - 10
			carry = 1
		}
		if next == nil {
			next = &ListNode{tmp, nil}
			new = next
		} else {
			next.Next = &ListNode{tmp, nil}
			next = next.Next
		}

	}
	if carry == 1 {
		next.Next = &ListNode{1, nil}
	}
	return new
}
