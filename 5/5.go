package main

func main() {
	longestPalindrome("aba")
}

func longestPalindrome(s string) string {
	new := make(map[int]string)
	new[0] = "#"
	for k, v := range s {
		new[2*k+1] = string(v)
		new[2*k+2] = "#"
	}
	right, center := 0, 0
	p := make(map[int]int)
	for i, _ := range new {
		if center < right {
			if p[2*i-center] < right-center {
				p[i] = p[2*i-center]
			} else {
				p[i] = right - center
			}
		} else {
			p[i] = 1
		}
		_, value := new[i+p[i]]
		for i >= center && value && new[i+p[i]] == new[i-p[i]] {
			p[i]++
		}
		if right < center+p[i] {
			right = center + p[i]
			center = i
		}
	}
	return s
}
