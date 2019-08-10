package main

import "fmt"

func main() {
	fmt.Print(twoSum([]int{1, 2, 3}, 3))
}
func twoSum(nums []int, target int) []int {
	intMap := make(map[int]int)
	for k, v := range nums {
		tmp := target - v
		if _, isset := intMap[tmp]; isset {
			return []int{k, intMap[tmp]}
		}
		intMap[v] = k
	}
	return nil
}
