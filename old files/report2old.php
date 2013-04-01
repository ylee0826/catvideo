<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cat Video</title>
<link rel="stylesheet" href="styles.css" type="text/css" />


</head>
<body>
<?php
   include('header.html');
   
?>


<div id="wrap">
	<div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
				<div class="content">
				
					<!-- CONTENT -->
					<h3>Submit a video</h3>
					<p>Thanks for submitting! </p>
					<table>
					<?php
					echo "<tr><td>Name</td><td>".$_POST['firstname']." ".$_POST['lastname']."</td></tr>\n";
					$month = $_POST['month'];
					$day = $_POST['day'];
					$year = $_POST['year'];
					echo "<tr><td>Date</td><td>$month-$day-$year</td></tr>\n";
					$location = $_POST['state'];
					$city = $_POST['city'];
					echo "<tr><td>Location</td><td>".$city.", ".$location."</td></tr>\n";

					$scariness = $_POST['scary'];
					echo "<tr><td>Scariness</td><td>$scariness</td></tr>\n";

					echo "<tr><td>Appearance</td><td>";

					if ((isset($_POST['bald'])  && $_POST['bald'] == 'checked')){
						echo "bald  ";	
					}
					
				

					if ((isset($_POST['almond'])  && $_POST['almond'] == 'checked')){
						echo "almond eyes  ";	
					}
					
					

					if ((isset($_POST['blue'])  && $_POST['blue'] == 'checked')){
						echo "blue  ";	
					}
					
					

					if ((isset($_POST['fingers'])  && $_POST['fingers'] == 'checked')){
						echo "long fingers  " ;	
					}
					echo "</td></tr>";

					?>
					</table>
					<!-- END CONTENT -->
					
				</div>
				
				<?php
				    include('SIDEnFOOTER.html');
				?>
				   


			</div>
		</div>
	</div>
</div>
</body>
</html>
