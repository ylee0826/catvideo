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
					<tr><td>&nbsp;</td><td>or</td></tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td><td>Choose tag you want to search by:</td></tr>
					<tr><td>&nbsp;</td><td>
					<form action="">
						<select name="tags">
							<option value="cute">cute</option>
							<option value="heartwarming">heartwarming</option>
							<option value="playing">playing</option>
							<option value="cuddling">cuddling</option>
							<option value="biting">biting</option>
							<option value="chasing">chasing</option>
							<option value="eating">eating</option>
							<option value="climbing">climbing</option>
							<option value="being pet">being pet</option>
							<option value="doing tricks">doing tricks</option>
							<option value="funny">funny</option>
							<option value="awesome">awesome</option>
							<option value="sleeping">sleeping</option>
							<option value="fighting">fighting</option>
							<option value="vocalizing">vocalizing</option>
							<option value="jumping">jumping</option>
							<option value="hissing">hissing</option>
							<option value="acting like a dog">acting like a dog</option>
							<option value="kitten">kitten</option>
							<option value="doing tricks">doing tricks</option>
						</select>
					</form>				
					</td></tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
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