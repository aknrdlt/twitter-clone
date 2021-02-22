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
<section class="services" id="service">
				<div class="max-width">
        <br><br><br><br><br>
						<div class="serv-content">
							<div class="card">
								<div class="box">
									<i class="fa fa-mobile"></i>
									<div class="text">Mobile Web App</div>
									<p>Mobile version of your web site. Make it adaptive for various mobile phones.</p>
								</div>
							</div>
							<div class="card">
								<div class="box">
									<i class="fa fa-code"></i>
									<div class="text">Web App</div>
									<p>Creatint websitse with a good design, by using HTML, CSS, JS, jQuery, bootstrap. </p>
								</div>
							</div>
							<div class="card">
								<div class="box">
									<i class="fa fa-desktop"></i>
									<div class="text">Desktop App</div>
									<p>Creatint Windows Desktop Application with C# language. By using MS SQL database.</p>
								</div>
							</div>

						</div>
				</div>

			</section>
      <script src="script.js"></script>
</body>
</html>