<!DOCTYPE html>
<html>
<head>
	<title>student page</title>
	<link rel="stylesheet" type="text/css" href="course.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-with,initial-scale=1.0">
	<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
	<div id="header">
			<h2 id="content">Announcement</h2>
		</div>
</head>
<body>
		<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

 	<a href="home.php"><i class="fas fa-home"></i>HOME</a><br>
  	<a href="pat.php"><i class="fas fa-user-alt"></i>PAT</a><br>
  	<a href="#"><i class="fas fa-book"></i>MODULES</a><br>
  	<a href="#"><i class="fas fa-stream"></i>ROUTINE</a><br>
  	<a href="#"><i class="fas fa-scroll"></i>ANNOUNCEMENT</a>
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

	<div id="announce">
		<div class="announce_1">
			<input type="" name="subject" class="announce_subject" placeholder="about"><br><br>
			<label for="myfile">Select a file:</label>
  			<input type="file" id="myfile" name="myfile"><br><br>
			<textarea class="announce-text1" placeholder="description:"></textarea>
		</div>

		<div class="announce_1">
			<input type="" name="subject" class="announce_subject" placeholder="about"><br><br>
			<label for="myfile">Select a file:</label>
  			<input type="file" id="myfile" name="myfile"><br><br>
			<textarea class="announce-text1" placeholder="description:"></textarea>
		</div>


		<div class="announce_1">
			<input type="" name="subject" class="announce_subject" placeholder="about"><br><br>
			<label for="myfile">Select a file:</label>
  <input type="file" id="myfile" name="myfile"><br><br>
			<textarea class="announce-text1" placeholder="description:"></textarea>
		</div>

		<div class="announce_1">

			<input type="" name="subject" class="announce_subject" placeholder="about"><br><br>
			<label for="myfile">Select a file:</label>
  			<input type="file" id="myfile" name="myfile"><br><br>
			<textarea class="announce-text1" placeholder="description:"></textarea>
		</div>
	</div>
	
</body>
</html>