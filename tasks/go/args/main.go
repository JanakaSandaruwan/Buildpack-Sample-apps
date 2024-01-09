package main

import (
	"fmt"
	"os"
)

func main() {
	// Get command-line arguments
	args := os.Args

	// Print the program name (first argument)
	fmt.Println("Program name:", args[0])

	// Print other arguments
	fmt.Println("Arguments:")
	for i, arg := range args[1:] {
		fmt.Printf("%d: %s\n", i+1, arg)
	}
}

