package main


func main() {
	var num = [5][5]int{
		{
			1, 4, 7, 11, 15,
		},
		{
			2, 5, 8, 12, 19,
		},
		{
			3, 6, 9, 16, 22,
		},
		{
			10, 13, 14, 17, 24,
		},
		{
			18, 21, 23, 26, 30,
		},
	}
	searchMatrix(num,5)
}
func searchMatrix(matrix [][]int, target int) bool {
	if len(matrix) == 0 || len(matrix[0]) == 0 {
		return false
	}
	i, j := 0, len(matrix[0])-1
	for i < len(matrix) && j >= 0 {
		if matrix[i][j] == target {
			return true
		} else if matrix[i][j] > target {
			j--
		} else {
			i++
		}
	}
	return false
}
