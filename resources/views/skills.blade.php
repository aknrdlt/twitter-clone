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
<section	 class="main" id="skills">
			<div class="skills">
				<h1>My skills</h1>

<div class="skillbar clearfix " data-percent="85%">
	<div class="skillbar-title" style="background: #d35400;"><span>HTML5</span></div>
	<div class="skillbar-bar" style="background: #e67e22;"></div>
	<div class="skill-bar-percent Count">85</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="70%">
	<div class="skillbar-title" style="background: #2980b9;"><span>CSS3</span></div>
	<div class="skillbar-bar" style="background: #3498db;"></div>
	<div class="skill-bar-percent Count">70	</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="75%">
	<div class="skillbar-title" style="background: #2c3e50;"><span>jQuery</span></div>
	<div class="skillbar-bar" style="background: #2c3e50;"></div>
	<div class="skill-bar-percent Count">75</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="50%">
	<div class="skillbar-title" style="background: #46465e;"><span>C#</span></div>
	<div class="skillbar-bar" style="background: #5a68a5;"></div>
	<div class="skill-bar-percent Count">50</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="80%">
	<div class="skillbar-title" style="background: #27ae60;"><span>Java</span></div>
	<div class="skillbar-bar" style="background: #2ecc71;"></div>
	<div class="skill-bar-percent Single Count">80</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="70%">
	<div class="skillbar-title" style="background: #124e8c;"><span>Figma</span></div>
	<div class="skillbar-bar" style="background: #4288d0;"></div>
	<div class="skill-bar-percent Count">70</div>
</div> <!-- End Skill Bar -->
			</div>
		</section>
    <script src="script.js"></script>
</body>
</html>