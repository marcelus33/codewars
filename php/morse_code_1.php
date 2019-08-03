<?php

/*
    In this kata you have to write a simple Morse code decoder. While the Morse code is now mostly superceded by voice and digital data communication channels, it still has its use in some applications around the world.
    The Morse code encodes every character as a sequence of "dots" and "dashes". For example, the letter A is coded as ·−, letter Q is coded as −−·−, and digit 1 is coded as ·−−−−. The Morse code is case-insensitive, traditionally capital letters are used. When the message is written in Morse code, a single space is used to separate the character codes and 3 spaces are used to separate words. For example, the message HEY JUDE in Morse code is ···· · −·−−   ·−−− ··− −·· ·.

    NOTE: Extra spaces before or after the code have no meaning and should be ignored.

    https://www.codewars.com/kata/54b724efac3d5402db00065e
*/

function decode_morse(string $code): string {
  $hrs = "";
  $words = explode("   ", $code);

  foreach($words as $word){
	  
	  $word = explode(" ", $word);
	  
	  foreach($word as $letter){
		   $hrs = $hrs."".MORSE_CODE[$letter];
	  }
	  $hrs = $hrs." "; 
  }
	
 return trim($hrs);
}