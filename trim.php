
	<?php

    $string1 = ' Welcome to Web Application Development  ';
    $string2 = 'PHP is easy   ';
	
	echo 'Before trim : ' . strlen($string1) .'<br>';
	echo 'After trim  : ' . strlen(trim($string1));
	echo '<br><br>';
	
	echo 'Before trim : ' . strlen($string2) .'<br>';
    echo 'After trim  : ' . strlen(trim($string2));
	echo '<br><br>';
		
    echo trim($string1, " Welment") .'<br>';
    echo trim($string2, "PH") .'<br><br>';
	
	?>
	
	
	
	
	
	
	
	
	
	
	
	