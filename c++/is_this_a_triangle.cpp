/*
    Implement a method that accepts 3 integer values a, b, c. The method should return true if a triangle can be built with the sides of given length and false in any other case.

	(In this case, all triangles must have surface greater than 0 to be accepted).

	https://www.codewars.com/kata/56606694ec01347ce800001b
*/

#include <limits.h>

namespace Triangle
{
  bool isTriangle(long int a, long int b, long int c)
  {    
    return ((a + b > c)&&(a + c > b)&&(b + c > a)&&(a>0&&a<LONG_MAX)&&(b>0&&b<LONG_MAX)&&(c>0&&c<LONG_MAX)); 
  }
};