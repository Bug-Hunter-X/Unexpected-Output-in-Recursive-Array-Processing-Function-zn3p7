# PHP Recursive Function Bug
This repository demonstrates a bug in a PHP function that recursively processes nested arrays. The function intends to split string values containing commas into arrays and handle nested arrays, but it produces incorrect output.

## Bug Description
The `processData` function uses recursion to handle nested arrays.  However, the way it modifies the input array directly leads to unexpected results, particularly when processing nested arrays that contain strings with commas.

## Solution
The solution demonstrates how to avoid modifying the original array by using a new array to store the results while traversing the nested structures. This prevents unexpected side effects of recursive processing and provides correct output.