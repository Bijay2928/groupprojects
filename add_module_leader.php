<!DOCTYPE html>
<html>
<head>
	<title>admin page</title>
	<meta name="viewport" content="width=device-with,initial-scale=1">
	<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="course.css">
	<div id="header">
			<h2 id="content">Module-leaders</h2>
		</div>
</head>
<body>
	<ul>
</ul>
<h1>Add New Recordes</h1>
<form action="module.php" method="POST">
<div class="addbox">
	Course Name<input class="text" type="text" id="fname" name="Cname"><br><br>
	Module Leader Name<input class="text" type="text" id="fname" name="Mname"><br><br>
	Module Code<input class="text" type="text" id="fname" name="MCname"><br><BR>
	Level <input class="text1" list="browsers" name="model"><br><br>

	 CLASS <input class="text1" list="browsers" name="browser">
  <datalist id="browsers">
    <option value="Level-4(L4)">
    <option value="Level-5(L5)">
    <option value="Level-6(L6)">
  </datalist><br><br>
	<div class="butn"><input type="submit" name="add" class="button button1" value="Add"></div>
	</div>
</form>
</body>
</html>