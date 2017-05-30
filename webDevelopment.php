<!doctype html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <title>Web Development</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				   <span class="icon-bar"></span>
				   <span class="icon-bar"></span>
				   <span class="icon-bar"></span>
				 </button>
				 <a class="navbar-brand" href="index.php"><img style="width:50px;" src="img/juarezDesign_Logo.png" alt="Site Logo"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
					   <li class="active"><a href="webDevelopment.php">Web Development</a></li>
					   <li><a href="visualDesign.php">Visual Design</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="text-center secondNav">
		      <a id="about" href="#aboutMe">About Me</a>
	          <a id="work" href="#myWork">My Work</a>
	          <a id="contact" href="#contactMe">Contact Me</a>
		</div>
		<div class="parallaxDesign">
			<h1 class="star">Web Development</h1>
		</div>
		<div class="aboutMe">
			<div class="me">
				<img class="star" src="img/myPhoto.jpg" width="200px">
				<h2>David Juarez</h2>
				<h3>Front End Developer</h3>
			</div>
			<div class="para">
				<p>My time at Mt Sierra College has also introduced me to web design and computer programming. Ever since I got my hands wet in the design and programming field, I have become increasingly attached to my work. I like to help others as much as possible with their problems. Which is the reason why I have a constant thirst to learn as much as I can about computer programming and web design, in order to help find solutions that make people's lives better.</p>
			</div>
		</div>
		<div class="work">
			<h1 id="myWork" class="text-center">My Work</h1>
			<div id="columns">
				<figure class="star">
					<img src="img/PQM_homePG.jpg">
					<h3>Positive Quote Machine</h3>
					<figcaption>Languages used: HTML, CSS, Javascript, jQuery</figcaption>
					<a href="https://djuarez94.github.io/randomQuoteMachine/" target="_blank"><p class="siteButtons">View Project</p></a>
				</figure>
				<figure class="star">
					<img src="img/SAR_homePG.png">
					<h3>Self Approved Records</h3>
					<figcaption>Languages used: HTML, CSS, Javascript, jQuery, Bootstrap, PHP</figcaption>
					<a href="http://selfapprovedrecords.com/" target="_blank"><p class="siteButtons">View Project</p></a>
				</figure>
				<figure class="star">
					<img src="img/PASS_homePG.png">
					<h3>Pepe's Auto Shop Solutions</h3>
					<figcaption>Languages used: HTML, CSS, Javascript, jQuery, Bootstrap, PHP</figcaption>
					<a href="https://shrouded-retreat-99111.herokuapp.com/" target="_blank"><p class="siteButtons">View Project</p></a>
				</figure>
			</div>
		</div>
		<div class="parallaxDesign">
			<div class="contactQuote">
				<h2 class="star">"Any kind of innovation requires the ability to <strong>collaborate</strong> and <strong>share</strong> ideas with other people, and to sit down and <strong>talk</strong> with customers and get their feedback and <strong>understand</strong> their needs"</h2>
				<p><i class="star">- Bill Gates</i></p>

			</div>
		</div>
		<div class="contact" id="contactMe">
			<h1 class="text-center">Contact me</h1>
			<form method="post" action="?" id="contact" class="form-horizontal  text-left">
				<div class="form-group text-left">
					<label for="name">Name:</label>
					<input name="name" type="name" class="form-control" id="name" placeholder= "Who will I be communicating with?">
				</div>
				<div class="form-group text-left">
					<label for="email">Email:</label>
					<input name="email" type="email" class="form-control" id="email" placeholder= "What is your email?">
				</div>
				<div class="form-group text-left">
					<label for="subject">Subject:</label>
					<input name="subject" type="text" class="form-control" id="subject" placeholder= "What is your email about?">
				</div>
				<div class="form-group text-left">
					<label for="message">Message:</label>
					<textarea rows="4" cols="50" id="message" name="message" style="width:100%" placeholder= "Type message here..." ></textarea>
				</div>
				<input id="submitButton" type="submit" value="Submit" name="submit">
			</form>
		</div>
		<footer>
			<img src="img/juarezDesign_Logo.png">
			<div class="email">
				<i class="fa fa-envelope" aria-hidden="true" style="font-size: 2em;"></i>
				<a href="#"><p>davidjuarez1411@gmail.com</p></a>
			</div>
			<div class="number">
				<i class="fa fa-mobile" aria-hidden="true" style="font-size: 2.5em;"></i>
				<a href="tel:1-626-257-8499"><p>626-257-8499</p></a>
			</div>
			<div class="text-center socialLinks">
				<a href="https://www.linkedin.com/in/david-juarez-915270117" target="_blank" ><i id='socialIcons' class="fa fa-linkedin-square" style="color:#fff; font-size: 3em;"></i></a>
				<a href="https://www.freecodecamp.com/djuarez94" target="_blank" ><i id='socialIcons' class="fa fa-free-code-camp" aria-hidden="true" style="padding-right: .25em; padding-left: .25em; color:#fff; font-size: 3em;"></i></a>
				<a href="https://github.com/djuarez94" target="_blank" ><i id='socialIcons' class="fa fa-github-square" style="font-size:3em; color:#fff;"></i></a>
			</div>
			<p class="copyright">&copy; <?php echo date('Y'); ?> Juarez Design.<br>All rights reserved.</p>
		</footer>
		<a href='#' class="back-to-top" style="display: inline;">
			<i class="fa fa-arrow-circle-up"></i>
		</a>
	</body>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>