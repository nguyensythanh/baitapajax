<?php
	$a = $_GET["a"]; 
	$b = $_GET["b"]; 
	$c = $_GET["c"]; 
	if ( is_numeric($a) == FALSE || is_numeric($b) == FALSE || is_numeric($c) == FALSE) 
     {
	 	echo "You must enter the number";
	 }
	 else
	 {
	 	if ($a == 0) {
	 		echo -$c/$b;
	 	}
	 	elseif ($a != 0) 
	 	{
	 		$delta = $b*$b -4*$a*$c;
	 		if ($delta > 0) {
	 			echo  -$b-sqrt($delta)/(2*$a)."<br>";
	 			echo  -$b+sqrt($delta)/(2*$a);
	 		}elseif ($delta < 0) {
	 			echo "pt vô nghiệm";
	 		}elseif ($delta == 0) {
	 			echo  -$b/(2*$a);
	 		}	
	 	}
	 }
?>