<!DOCTYPE html>
<html>
<head>
<style>
	label
	{
		display:inline-block;
		width:100px;
		margin-bottom:10px;
	}
</style>
<title>Add Employee</title>
</head>
<body>
<h1>Add Employee</h1>
<form method="post" action="process.php">
<label>Name:</label>
<input type="text" name="name"/><br/>
<label>Address:</label>
<input type="text" name="address"/><br/>
<label>Email:</label>
<input type="email" name="email"/><br/>
<label>Designation:</label>
<select name="desi" id="desi">
  <option value="Asst.Prof">Asst.Prof</option>
  <option value="Assoc.Prof">Assoc.Prof</option>
  <option value="Professor">Professor</option>
</select><br/>

<input type="submit" value="Add Employee"/>
</form>
</body>
</html>