<!DOCTYPE html>
<html>
<head>
	<title>admin page</title>
	<meta name="viewport" content="width=device-with,initial-scale=1">
	<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="course.css">
	<div id="header">
			<h2 id="content">Course</h2>
		</div>
</head>
<body>
	<ul>
</ul>
<h1>Add New Course</h1>
<form action="course.php" method="POST">
<div class="addbox">
	Course Name<input class="text" type="text" id="fname" name="course_name"><br><br>
	Credit Hour<input class="text" type="text" id="fname" name="credit_hour"><br><br>
	CLASS <input class="text1" list="browsers" name="class">
  <datalist id="browsers">
    <option value="Level-4(L4)">
    <option value="Level-5(L5)">
    <option value="Level-6(L6)">
  </datalist><br><br>
	<div class="butn"><button class="button button1" name="add"><a href="#"><strong>SAVE</strong></a></button> <button class="button button1"><a href="update.php"><strong>View</strong></a></button></div>
	</div>
</form>

</body>
</html>