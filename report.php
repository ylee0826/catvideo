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
					<tr><td>URL</td><td><input type="text" id="url" name="url" size="50" /></td></tr>
					<tr><td>Video length (h/m/s)</td><td><input type="number" name="hours" min="0" max="10" step="1" value="0" size="1"/>
					<input type="number" name="minutes" min="0" max="59" step="1" value="0" size="1"/>
					<input type="number" name="seconds" min="0" max="59" step="1" value="0" size="1"/></td></tr>
					<tr><td>Breed (optional)</td><td><input type="text" id="breed" name="breed" size="50" /></td></tr>
					
					
					<tr><td>Category</td><td> 
					
					<select name="category">
					<option>Cute</option>
					<option>Funny</option>
					<option>Heartwarming</option>
					<option>Awesome</option>
					</select></td></tr>
					
					<tr><td>Tags (e.g. playing, meowing, cuddling)</td><td><input type="text" id="tags" name="tags" size="50" /></td></tr>
					
					<tr><td>Overall rating (between 0.0 and 10.0)</td><td><input type="number" name="rating" min="0" max="10" step="0.1" value="0.0"/></td></tr>
			
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
