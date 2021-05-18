<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
	<link rel="stylesheet" type="text/css" href="course.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-with,initial-scale=1.0">
	<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	
		<nav>
			<h2 id="content">Students</h2>
			<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href=""><i class="fas fa-pen-fancy"></i>Student</a>
				<ul>
					<li><a href="add_student.php">Add</a></li>
					<li><a href="more_student.php">More</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</head>
<body>
	<div id="mySidenav" class="sidenav">
  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 	<a href="index.html"><i class="fas fa-home"></i>HOME</a><br>
  	<a href="#"><i class="fas fa-user-alt"></i>ADMINISTRATION</a><br>
  	<a href="#"><i class="fas fa-user-friends"></i>MODULE LEADERS</a><br>
  	<a href="#"><i class="fas fa-book"></i>MODULES</a><br>
  	<a href="course.html"><i class="fas fa-pen-fancy"></i>COURSES</a><br>
  	<a href="student.html"><span><i class="fas fa-user-graduate"></i>STUDENTS</a></span><br>
  	<a href="#"><i class="fas fa-scroll"></i>NOTICE</a>
	</div>
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

	<script>
		function openNav() 
			{
  				document.getElementById("mySidenav").style.width = "200px";
			}

		function closeNav() 
			{
  				document.getElementById("mySidenav").style.width = "0";
			}
	</script>

	<form method="POST">
				<table>
					  <tr>
					    <th>Student Id</th>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Course Name</th>
					    <th>Level</th>
					  </tr>
			  
				</table>
			</form>

	</body>
</html>