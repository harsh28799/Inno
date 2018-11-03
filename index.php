<!DOCTYPE html>
<html>
<head>
	<title>POLL : SIGN IN</title>
	<style>
		.error{
			color: red;
		}
		body{
			background-color: slategray;
			color: white;
		}
	</style>
</head>
<body>
	<?php include('check.php'); ?>
	<h1>SIGN IN:</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
		<fieldset>
		<legend><strong>SIGN IN WITH YOU INNOVISION ID:</strong></legend>
		<table>
			<tr>
				<td>Inno-ID:</td>
				<td><input type="text" name="id" value="<?php echo $id ?>"></td>
				<td><span class="error">*<?php echo $idErr; ?></span></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="submit"></td>
			</tr>
			</fieldset>
		</table>		
	</form>
</body>
</html>