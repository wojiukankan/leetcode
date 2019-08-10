package main

func main() {
	print(lengthOfLongestSubstring("au"))
}

func lengthOfLongestSubstring(s string) int {
	if len(s) < 2 {
		return len(s)
	}
	max, len, i := 0, 0, 0
	tmpMap := make(map[int32]int)
	for j, v := range s {
		if value, isset := tmpMap[v]; isset && value >= i {
			i = value
		}
		len = j - i + 1
		if max < len {
			max = len
		}
		tmpMap[v] = j + 1
	}
	return max
}
