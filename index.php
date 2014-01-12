<head>
	<link href="style.css" rel="stylesheet" />
</head>
<body>	
	<?php
		//This just adds 100 divs to the page to be coloured	

		$counter = 0;			
		$r = 3;
		$s = 0.4;
	
		while ($counter < 100 ) {
				
				
			echo '<div class="box pixel'.$pixel.'">'.$sNew.'</div>';
			$sNew = $r * $s * (1-$s);
			//echo $sNew;
			//echo '<br />';
			$s = $sNew;
			
			$counter++;
		}
	
		
	
		
		//$s2 = $r * $s1 * (1 - $s1);
		//echo $s2;
		//echo '<br />';
		//$s3 = $r * $s2 * (1 - $s2);
		//echo $s3;
		//echo '<br />';
		//$s4 = $r * $s3 * (1 - $s3);
		//echo $s4;
		
		

			
			
		
		
	
	?>


</body>
