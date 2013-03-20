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
					<h3>Submission</h3>
					<p>Submit a cat video we missed! Just fill out the form. </p>
					
					<form method = "post" action = "report2.php">
					<table>
					<tr><td>Title of video</td><td><input type="text" id="title" name="title" size="50" /></td></tr>
					<tr><td>URL (On youtube, click 'Share' and then 'Embed.' Copy the URL in the quotes after 'src = ' and paste it here.</td><td><input type="text" id="url" name="url" size="50" /></td></tr>
					<tr><td>Video length (hh/mm/ss)</td><td><input type="number" name="hours" min="0" max="10" step="1" value="00" size="1"/>
					<input type="number" name="minutes" min="0" max="59" step="1" value="00" size="1"/>
					<input type="number" name="seconds" min="0" max="59" step="1" value="00" size="1"/></td></tr>
					<tr><td>Overall rating (between 0.0 and 10.0)</td><td><input type="number" name="rating" min="0" max="10" step="0.1" value="0.0"/></td></tr>
			
					<tr><td>Breed (Check one for each cat if they are different breeds)</td><td>&nbsp;</td></tr>
					<tr><td><input type="checkbox" name="Unspecified" value="checked" /> Unspecified</td><td><input type="checkbox" name="Persian" value="checked" /> Persian</td></tr>
					<tr><td><input type="checkbox" name="Exotic shorthair" value="checked" /> Exotic shorthair</td><td><input type="checkbox" name="British shorthair" value="checked" /> British shorthair</td></tr>
					<tr><td><input type="checkbox" name="Siamese" value="checked" /> Siamese</td><td><input type="checkbox" name="Ragdoll" value="checked" /> Ragdoll</td></tr>
					<tr><td><input type="checkbox" name="Bengal" value="checked" /> Bengal</td><td><input type="checkbox" name="Tabby" value="checked" /> Tabby</td></tr>
					<tr><td><input type="checkbox" name="Scottish fold" value="checked" /> Scottish fold</td><td><input type="checkbox" name="Hairless" value="checked" /> Hairless</td></tr>
					
					<tr><td>Tags (Check all that apply)</td><td>&nbsp;</td></tr>
					<tr><td><input type="checkbox" name="cute" value="checked" /> cute</td><td><input type="checkbox" name="funny" value="checked" /> funny</td></tr>
					<tr><td><input type="checkbox" name="heartwarming" value="checked" /> heartwarming</td><td><input type="checkbox" name="awesome" value="checked" /> awesome</td></tr>
					<tr><td><input type="checkbox" name="playing" value="checked" /> playing</td><td><input type="checkbox" name="sleeping" value="checked" /> sleeping</td></tr>
					<tr><td><input type="checkbox" name="cuddling" value="checked" /> cuddling</td><td><input type="checkbox" name="fighting" value="checked" /> fighting</td></tr>
					<tr><td><input type="checkbox" name="biting" value="checked" /> biting</td><td><input type="checkbox" name="vocalizing" value="checked" /> vocalizing</td></tr>
					<tr><td><input type="checkbox" name="chasing" value="checked" /> chasing</td><td><input type="checkbox" name="jumping" value="checked" /> jumping</td></tr>
					<tr><td><input type="checkbox" name="eating" value="checked" /> eating</td><td><input type="checkbox" name="hissing" value="checked" /> hissing</td></tr>
					<tr><td><input type="checkbox" name="climbing" value="checked" /> climbing</td><td><input type="checkbox" name="acting like a dog" value="checked" /> acting like a dog</td></tr>
					<tr><td><input type="checkbox" name="being pet" value="checked" /> being pet</td><td><input type="checkbox" name="kitten" value="checked" /> kitten</td></tr>
					<tr><td><input type="checkbox" name="doing tricks" value="checked" /> doing tricks</td></tr>
					
					
					<tr><td>&nbsp;</td><td><input type="submit" value="Submit" /></td></tr>
			
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
