/*
    Create a function that takes a Roman numeral as its argument and returns its value as a numeric decimal integer. You don't need to validate the form of the Roman numeral.

	Modern Roman numerals are written by expressing each decimal digit of the number to be encoded separately, starting with the leftmost digit and skipping any 0s. So 1990 is rendered "MCMXC" (1000 = M, 900 = CM, 90 = XC) and 2008 is rendered "MMVIII" (2000 = MM, 8 = VIII). The Roman numeral for 1666, "MDCLXVI", uses each letter in descending order.

	Example:

	solution('XXI'); // should return 21

	https://www.codewars.com/kata/51b6249c4612257ac0000005
*/

#include <iostream>
#include <string>
#include <vector>

using namespace std;

int solution(string roman) {
  
  string::iterator it;
  vector<int> numbers;
  int sum = 0; int i=0;
  
  numbers.assign(roman.capacity(), 0); 
  
  for (it=roman.begin(); it!=roman.end(); it++, i++) {
      switch(*it)
      {
        case 'I': numbers[i] = 1;break;
        case 'V': numbers[i] = 5;break;
        case 'X': numbers[i] = 10;break;
        case 'L': numbers[i] = 50;break;
        case 'C': numbers[i] = 100;break;
        case 'D': numbers[i] = 500;break;
        case 'M': numbers[i] = 1000;break;
      }
  }
 
  for (i = 0; i < numbers.size()-1; i++){
       if (numbers[i]>=numbers[i+1])
        {sum = sum + numbers[i];}
        else {sum = sum+numbers[i+1]-numbers[i]; i++;} 
    } 
      
  return sum;
}