<?php 
/*
    Build a pile of Cubes
    ---------------------
    Your task is to construct a building which will be a pile of n cubes. The cube at the bottom will have a volume of n^3, the cube above will have volume of (n-1)^3 and so on until the top which will have a volume of 1^3.

    You are given the total volume m of the building. Being given m can you find the number n of cubes you will have to build?

    The parameter of the function findNb (find_nb, find-nb, findNb) will be an integer m and you have to return the integer n such as n^3 + (n-1)^3 + ... + 1^3 = m if such a n exists or -1 if there is no such n.

    https://www.codewars.com/kata/5592e3bd57b64d00f3000047
*/

function findNb($m) {
    $sum = 1;
	
	for($i = 2; $sum < $m; $i++){
	    $sum += pow($i, 3);
	}
	
	return ($sum==$m)?$i-1:-1;
}