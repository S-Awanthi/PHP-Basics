	
	<?php
	
	//Defining an array
		$car = array("BMW","Toyota","Honda");
		
		//Print the array
		print_r($car);		echo '<br><br>';
		
		//Print array with data types	
		var_dump($car);
		
		//accessing array values within PHP tag
		echo "<h5> $car[0] </h5>";
		echo "<h5> $car[1] </h5>";
		
	?>	
		
	<!--Accessing values withim HTML page-->
	<html>
		<body>			
			<p><?php echo $car[1]; ?></p>
			<p><?php echo $car[2]; ?></p>
		</body>
	</html>
	
	
	
	
	
				
				