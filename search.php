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
					<tr><td><img src="cat1.png"/></td>
					
					<tr><td>By title: </td></tr><td><input type="text" id="search" name="search" size="50"/></td>
					
					<tr><td>Advanced options (If you don't want to search by one of these tags, leave it blank.)</td></tr>
					
					<tr><td>Breed: </td></tr>
					<tr><td>
					<form action="">
						<select name="breed">
							<option value="NA">---</option>
							<option value="Unspecified">Unspecified</option>
							<option value="Persian">Persian</option>
							<option value="Exotic shorthair">Exotic shorthair</option>
							<option value="British shorthair">British shorthair</option>
							<option value="Siamese">Siamese</option>
							<option value="Ragdoll">Ragdoll</option>
							<option value="Bengal">Bengal</option>
							<option value="Tabby">Tabby</option>
							<option value="Scottish fold">Scottish fold</option>
							<option value="Hairless">Hairless</option>
						</select>
					</form>
					</td>
					</tr>
				
				
					<tr><td>Age: </td></tr>
						<tr><td>
						<form action="">
							<select name="age">
								<option value="NA">---</option>
								<option value="kitten">kitten</option>
								<option value="juvenile">juvenile</option>
								<option value="adult">adult</option>
							</select>
						</form>
						</td>
					</tr>
				
				
					<tr><td>Category: </td></tr>
						<tr><td>
						<form action="">
							<select name="category">
								<option value="NA">---</option>
								<option value="cute">cute</option>
								<option value="heartwarming">heartwarming</option>
								<option value="funny">funny</option>
								<option value="awesome">awesome</option>
							</select>
						</form>
						</td>
						</tr>
				
				
					<tr><td>Activity:</td></tr>
					<tr><td>
					<form action="">
						<select name="activity">
							<option value="NA">---</option>
							<option value="playing">playing</option>
							<option value="cuddling">cuddling</option>
							<option value="eating">eating</option>
							<option value="doing tricks">doing tricks</option>
							<option value="sleeping">sleeping</option>
							<option value="fighting">fighting</option>
							<option value="vocalizing">vocalizing</option>
							<option value="doing tricks">doing tricks</option>
						</select>
						</tr>
					</form>				
					</td></tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<td><input type="submit" value="Search" /></td>
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