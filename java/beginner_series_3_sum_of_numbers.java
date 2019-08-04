/*
    Given two integers a and b, which can be positive or negative, 
    find the sum of all the numbers between including them too and return it. 
    If the two numbers are equal return a or b.

	Note: a and b are not ordered!

	Examples
	GetSum(1, 0) == 1   // 1 + 0 = 1
	GetSum(1, 2) == 3   // 1 + 2 = 3
	GetSum(0, 1) == 1   // 0 + 1 = 1
	GetSum(1, 1) == 1   // 1 Since both are same
	GetSum(-1, 0) == -1 // -1 + 0 = -1
	GetSum(-1, 2) == 2  // -1 + 0 + 1 + 2 = 2

	https://www.codewars.com/kata/55f2b110f61eb01779000053
*/

  public class Sum
  {
     public int GetSum(int a, int b)
     {
      
      int upper = a; 
      int lower = b;
      
      if (a == b)
        return a;
      else
       if (b > a){
         upper = b;
         lower = a;       
       }
       
       return (upper - lower + 1) * (lower + upper) / 2;
     }
  }