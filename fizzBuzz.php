<html>
 <title>FizzBuzz!</title><!--This is html to name the current web page-->
 <body>

<?php

	for($x = 1; $x < 101; $x++) {//using a for loop for counting, one to one-hundred

		if($x % 15 == 0) {//if the current number is divisble by 15 (5 and 3) then display the word fizzbuzz instead
			echo "<br/>FizzBuzz";
			}
		elseif($x % 5 == 0) {//if the current number is divisble by 5, display buzz
			echo "<br/>Buzz";
			}
		elseif($x % 3 == 0) {//if current number is divisble by 3, echo fizz
			echo "<br/>Fizz";
			}
		else {//if current number isnt divisible by 15,5,3 then echo number
			echo "<br/>".$x; 
			}
	} 

?>

</body>
</html>
