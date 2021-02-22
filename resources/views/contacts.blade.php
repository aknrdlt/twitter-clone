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
<section class="contact" id="contacts">
        			<div class="max-width">
						<div class="contact-content">
                			<div class="column left">
                        				<div class="row">
                            			<i class="fa fa-user"></i>
                            				<div class="info">
                                				<div class="head">Name</div>
													<div class="sub-title">Sarkytbayev Aknurdaulet</div>
											</div>
										</div>
														<div class="row">
                            							<i class="fa fa-map-marker"></i>
                            								<div class="info">
                                								<div class="head">Address</div>
																<div class="sub-title">Aqtobe, Kazakhstan</div>
															</div>
														</div>
															<div class="row">
                            									<i class="fa fa-envelope"></i>
                            										<div class="info">
                                										<div class="head">Email</div>
																			<div class="sub-title">190103438@stu.sdu.edu.kz</div>
																			
																	</div>

															</div>
									</div>
							</div>
                				<div class="column right" >
                    				<div class="text" style="margin-bottom:20px;">Message me</div>
									<form>
                        				<div class="fields">
                            				<div class="field name">
                               				<input  type="text" placeholder="Name" required>
                            				</div>
                            					<div class="field email">
                                				<input  type="email" placeholder="Email" required>
                           						</div>
                        				</div>

                        					<div class="field textarea">
                           
                            				<textarea cols="20" rows="10"  placeholder="Messages..." required></textarea>
                        					</div>
                        						<div class="button">
                            					<button type="submit">Send message</button>
                        						</div>
									</form> 	
                				</div>
                		</div>

					
				</section>
        <script src="script.js"></script>
</body>
</html>