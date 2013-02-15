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
					<h3>Cat Video</h3>
					<p>Welcome to the Cat video website. </p>
					
					<form method = "post" action = "report2.php">
					<table>
					<tr><td>First Name</td><td><input type="text" id="firstname" name="firstname" /></td></tr>
					<tr><td>Last Name</td><td><input type="text" id="lastname" name="lastname" /></td></tr>
					<tr><td>Date Abducted</td><td><input type="number" name="month" min="1" max="12" step="1" value="1" size="3"/>
					<input type="number" name="day" min="1" max="31" step="1" value="1" size="3"/>
					<input type="number" name="year" min="2009" max="2014" step="1" value="2011" size="4"/></td></tr>
					
					
					<tr><td>Location (city)</td><td><input type="text" name="city" id="city"/> 
					
					<select name="state">
					<option>AL</option>
					<option>AK</option>
					<option>AS</option>
					<option>AZ</option>
					<option>CA</option>
					<option>NM</option>
					<option>TX</option>
					<option>VA</option>
					</select></td></tr>
					
					<tr><td>How Scary?</td><td>not scary <input type="range" name="scary" min="1" max="10" step="1" value="5"/>scary</td></tr>
					<tr><td>Appearance</td><td>&nbsp;</td></tr>
					<tr><td><input type="checkbox" name="bald" value="checked" /> bald</td><td><input type="checkbox" name="almond" value="checked" /> almond eyes</td></tr>
					<tr><td><input type="checkbox" name="blue" value="checked" /> blue</td><td><input type="checkbox" name="fingers" value="checked" /> long fingers</td></tr>
					<tr><td>&nbsp;</td><td><input type="submit" value="Report Abduction" /></td></tr>
					</table>
					
					</form>
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
