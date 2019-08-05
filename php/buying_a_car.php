<?php
/*  
    Let us begin with an example:

    A man has a rather old car being worth $2000. He saw a secondhand car being worth $8000. He wants to keep his old car until he can buy the secondhand one.

    He thinks he can save $1000 each month but the prices of his old car and of the new one decrease of 1.5 percent per month. Furthermore this percent of loss increases by 0.5 percent at the end of every two months. Our man finds it difficult to make all these calculations.

    Can you help him?

    How many months will it take him to save up enough money to buy the car he wants, and how much money will he have left over?
    
    Note:

    Selling, buying and saving are normally done at end of month. Calculations are processed at the end of each considered month but if, by chance from the start, the value of the old car is bigger than the value of the new one or equal there is no saving to be made, no need to wait so he can at the beginning of the month buy the new ca

    https://www.codewars.com/kata/554a44516729e4d80b000012
*/ 
    
function nbMonths($startPriceOld, $startPriceNew, $savingPerMonth, $percentLossByMonth) {
    
    $totalMoney = $startPriceOld;
    $month = 0;
    $percentLossByMonth = $percentLossByMonth/100;
    $percentLossBimonthly = 0;
    $savingSum = 0;
   
    while ($totalMoney < $startPriceNew) {
  	  $month++;
  	  
  	  $percentLossBimonthly+=(($month > 0) && (($month % 2)==0))?(0.5/100):0;	 
  		
  	  $startPriceOld = $startPriceOld - ($startPriceOld * ($percentLossByMonth+$percentLossBimonthly)); 
      $startPriceNew = $startPriceNew - ($startPriceNew * ($percentLossByMonth+$percentLossBimonthly));
       
  	  $savingSum += $savingPerMonth;
      $totalMoney = $startPriceOld + $savingSum;

	  }
    
    return array($month, round($totalMoney-$startPriceNew));
}