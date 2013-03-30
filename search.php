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
					
					<form method = "post" action = "search2.php">
					<table>
					<tr><td>Search: </td><td><input type="text" id="title" name="title" size="50" /></td></tr>
			
					<tr><td>Breed</td><td> 
					<select name="breed">
					<option>---</option>
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
					
					
					<tr><td>Category</td><td>
					<select name="category">
					<option>---</option>
					<option>funny</option>
					<option>cute</option>
					<option>heartwarming</option>
					<option>amazing</option>
					</select></td></tr>
					
					
					<tr><td>Age of cat</td><td>
					<select name="age">
					<option>---</option>
					<option>kitten</option>
					<option>juvenile</option>
					<option>adult</option>
					</select></td></tr>
					
					
					<tr><td>Activity</td><td>
					<select name="activity">
					<option>---</option>
					<option>playing</option>
					<option>sleeping</option>
					<option>cuddling</option>
					<option>fighting</option>
					<option>vocalizing</option>
					<option>eating</option>
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
