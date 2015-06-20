<?php

/**
 * FizzBuzz
 * Print numbers 1 to 100. 
 * Print “Fizz” for multiples of 3 and print “Buzz” for multiples of 5. 
 * For multiples of 3 and 5, print “FizzBuzz”.
 *
 */

function fizzbuzz(){
	$output = ""; 
	
	for ( $i = 1; $i <= 100; $i++ ){
		if (( $i % 3 == 0 ) and ( $i % 5 == 0 )){
			$output .= "FizzBuzz";
		}elseif ( $i % 3 == 0 ){
			$output .= "Fizz";
		} elseif ( $i % 5 == 0 ){
			$output .= "Buzz";
		} else {	
			$output .= $i;
		} 
		$output .= " ";
	}
	
	return $output;
}
 
echo fizzbuzz();

?>