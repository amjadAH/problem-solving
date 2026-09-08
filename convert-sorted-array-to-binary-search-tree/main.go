package main

import "fmt"

// import "fmt"

func main() {
	nums := []int{1, 3}

	v := sortedArrayToBST(nums)
	fmt.Println(v)
}

type TreeNode struct {
	Val   int
	Left  *TreeNode
	Right *TreeNode
}

func sortedArrayToBST(nums []int) *TreeNode {
	if len(nums) == 1 {
		return &TreeNode{nums[0], nil, nil}
	}
	if len(nums) == 0 {
		return nil
	}
	mid := int(len(nums) / 2)
	root := nums[mid]
	right := nums[mid+1:]
	left := nums[0:mid]

	return &TreeNode{
		root,
		sortedArrayToBST(right),
		sortedArrayToBST(left),
	}
}
