
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="stylesheet.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<nav class="navtop">
			<div>
				<h1>Turbine Challenge Request</h1>
			</div>
		</nav>
		<div class="content">
			<h2>Output</h2>
			<?php
				for ($i = 1; $i <= 100; $i++)
				{
				  if ( $i%3 == 0 && $i%5 == 0 )
				   {
				     echo "<b>"."Coating Damage and Lightning Strike"."<br />" ;
				    
				   }
				  else if ( $i%3 == 0 ) 
				   {
				     echo "<b>"."Coating Damage"."<br />";
				   }
				     else if ( $i%5 == 0 ) 
				   {
				     echo "<b>"."Lightning Strike"."<br />";
				   }
				     else
				   {
				     echo "<b>".$i."<br />";
				   }
				 }
			?>
			<h2></h2>

		</div>
	</body>
</html>