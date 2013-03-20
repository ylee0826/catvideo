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
					<p>Search for a video you want to watch</p>
					
					<form method = "post" action = "search2.php">
					<table>
					<tr><td><img src="cat1.png"/></td><td><input type="text" id="search" name="search" size="50"/></td>
					<td>&nbsp;</td><td><input type="submit" value="Search" /></td></tr>
					
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td><td>Choose breed you want to search by: </td></tr>
					<tr><td>&nbsp;</td><td>
					<form action="">
						<select name="breed">
							<option value="unspecified">unspecified</option>
							<option value="exoticShorthair">exotic shorthair</option>
							<option value="siamese">siamese</option>
							<option value="bengal">bengal</option>
							<option value="scottishFold">scottish fold</option>
							<option value="persian">persian</option>
							<option value="britishShorthair">british shorthair</option>
							<option value="ragdoll">ragdoll</option>
							<option value="tabby">tabby</option>
							<option value="hairless">hairless</option>
						</select>
					</form>
					</td>
					</tr>
					
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td><td>or</td><tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td><td>Choose tag you want to search by:</td></tr>
					<tr><td>&nbsp;</td><td>
					
					<form action="">
						<select name="tags">
							<option value="cute">cute</option>
							<option value="heartwarming">heartwarming</option>
							<option value="">playing</option>
							<option value="">cuddling</option>
							<option value="">biting</option>
							<option value="">chasing</option>
							<option value="">eating</option>
							<option value="">climbing</option>
							<option value="">being pet</option>
							<option value="">doing tricks</option>
							<option value="">funny</option>
							<option value="">awesome</option>
							<option value="">sleeping</option>
							<option value="">fighting</option>
							<option value="">vocalizing</option>
							<option value="">jumping</option>
							<option value="">hissing</option>
							<option value="">acting like a dog</option>
							<option value="">kitten</option>
							<option value="">doing tricks</option>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
							
						</select>
					</form>				
					</td></tr>

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
