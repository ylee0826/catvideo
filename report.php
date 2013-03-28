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
			
					<tr><td>Breed</td><td> 
					<select name="breed">
					<option>Unspecified</option>
					<option>Persian</option>
					<option>Exotic shorthair</option>
					<option>British shorthair</option>
					<option>Siamese</option>
					<option>Ragdoll</option>
					<option>Bengal</option>
					<option>Tabby</option>
					<option>Scottish fold</option>
					<option>Hairless</option>
					</select></td></tr>
					
					
					<tr><td>Tag</td><td>
					<select name="tag">
					<option>funny</option>
					<option>cute</option>
					<option>heartwarming</option>
					<option>amazing</option>
					<option>playing</option>
					<option>sleeping</option>
					<option>cuddling</option>
					<option>fighting</option>
					<option>biting</option>
					<option>vocalizing</option>
					<option>chasing</option>
					<option>jumping</option>
					<option>eating</option>
					<option>hissing</option>
					<option>climbing</option>
					<option>acting like a dog</option>
					<option>being pet</option>
					<option>kitten</option>
					<option>doing tricks</option>
					</select></td></tr>
					
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
