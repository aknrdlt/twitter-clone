<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<header>
		<a href="https://github.com/aknrdlt" class="logo">GitHub</a>
		<div id="myLinks">
			<ul>
        <li><a href="{{route('main')}}">About</a></li>
				<li><a href="{{route('skills')}}">Skills</a></li>
				<li><a href="{{route('services')}}">Services</a></li>
				<li><a href="{{route('contacts')}}">Contacts</a></li>
			</ul>
		</div>
	</header>
  <section class="banner">
		<div class="textBx">
			<h2>Hello, I'm<br><span class="typewriter-text">Aknurdaulet.</span></h2>
			<h3>I'm a future software engineer<br>I build websites.</h3> <br>
			<button type="button" class="btn btn-dark">Download my CV</button>
		</div>
	</section>
  <section id="aboutme">
      <div class="heading">
				<h2>About Me</h2>
			</div>
			<div class="content">
				<div class="w50">
					<img src="https://i.pinimg.com/736x/3c/2f/db/3c2fdb269788ab509e650f71508750f5.jpg" class="img">				
				</div>
				<div class="contentBx w50">
					<h3 style="font-weight: bold;">I'm future software engineer</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
					<br>
					<br>
					</p>
				</div>
			</div>
  </section>
	<script src="script.js"></script>

</body>
</html>