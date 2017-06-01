<?php

$feedback =''; //empty until there is feedback.

if (isset($_POST['name']))
{
	/*-------------------------------------
	| Initialize Variables
	-------------------------------------*/
	$to = "davidjuarez1411@gmail.com";
	$subject = "Portfolio Contact";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	/*-------------------------------------
	| Validation
	-------------------------------------*/
	if ($name == '' || $email == '' || $subject == '' || $message == '')
	{
		$feedback = 'Fill out all the fields';
	}
	else
	{
		/*-------------------------------------
		| Compose
		-------------------------------------*/
		$body = '
			Hi! My name is ' . $name . ' and my subject is  ' . $subject . '. <br><br>

			' . $message . '<br>

			Sincerely,<br>
			' . $name . '<br>
			P.S. Oh yeah, my email is ' . $email . '.
		';

		/*-------------------------------------
		| Make it look like a real eamil
		-------------------------------------*/
		$headers = "From: davidjuarez1411@gmail.com" . "\r\n";
		$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
		// $headers .= "CC: susan@example.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


		/*-------------------------------------
		| Send the email
		-------------------------------------*/
		if (!mail($to, $subject, $body, $headers))
		{
			$feedback = 'I apologize! We were unable to send from our hosted server. Please contact me directly <a href="mailto:davidjuarez1411@gmail.com"><p>here</p></a>';
		}
		else
		{
			$feedback = 'Message Sent from our servers. Let\'s hope it gets through the mail servers!';
		}
	}
}
?>
<!doctype html>
<html lang="en">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Juarez Design : Web Development</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<?php include 'nav.php' ?>
		<div class="text-center secondNav">
		      <a id="about" href="#aboutMe">About Me</a>
	          <a id="work" href="#myWork">My Work</a>
	          <a id="contact" href="#contactMe">Contact Me</a>
		</div>
		<div class="parallaxDesign">
			<h1 class="star">Web Development</h1>
			<a href="#aboutMe"><img class="downArrow" src="img/workIcon.png"></a>
		</div>
		<div class="aboutMe" id="aboutMe">
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
			<div id="columnsWeb">
				<figure  class="star">
					<img src="img/PQM_homePG.jpg">
					<h3>Positive Quote Machine</h3>
					<figcaption>Languages used: HTML, CSS, Javascript, jQuery</figcaption>
					<a href="https://djuarez94.github.io/randomQuoteMachine/" target="_blank"><p class="siteButtons">View Project</p></a>
				</figure>
				<figure  class="star">
					<img src="img/SAR_homePG.png">
					<h3>Self Approved Records</h3>
					<figcaption>Languages used: HTML, CSS, Javascript, jQuery, Bootstrap, PHP, WordPress</figcaption>
					<a href="http://selfapprovedrecords.com/" target="_blank"><p class="siteButtons">View Project</p></a>
				</figure>
				<figure  class="star">
					<img src="img/PASS_homePG.png">
					<h3>Pepe's Auto Shop Solutions</h3>
					<figcaption>Languages used: HTML, CSS, Javascript, jQuery, Bootstrap, PHP</figcaption>
					<a href="https://shrouded-retreat-99111.herokuapp.com/" target="_blank"><p class="siteButtons">View Project</p></a>
				</figure>
				<figure  class="star">
					<img src="img/wikiePediaSearch.png">
					<h3>WikiPedia Search</h3>
					<figcaption>Languages used: HTML, CSS, Javascript, jQuery, Bootstrap</figcaption>
					<a href="https://djuarez94.github.io/wikipediaViewer/" target="_blank"><p class="siteButtons">View Project</p></a>
				</figure>
				<figure  class="star">
					<img src="img/cookCheck.png">
					<h3>Cook Check Mobile App</h3>
					<figcaption>Languages used: HTML, CSS, Javascript, jQuery, Bootstrap, PHP <span class="danger">Still under development.</span></figcaption>
					<a href="#" target="_blank"><p class="siteButtons">View Project</p></a>
				</figure>
			</div>
		</div>
		<div class="parallaxDesign">
			<div class="contactQuote">
				<h2 class="star">"Any kind of innovation requires the ability to <strong>collaborate</strong> and <strong>share</strong> ideas with other people, and to sit down and <strong>talk</strong> with customers and get their feedback and <strong>understand</strong> their needs"</h2>
				<p><i class="star">- Bill Gates</i></p>

			</div>
		</div>
		<?php if (!empty($feedback)) : ?>
			<div class="alert alert-info emailAlert" id ="alert">
				<?php echo $feedback; ?>
			</div>
		<?php endif; ?>
		<div class="contact" id="contactMe">
			<h1 class="text-center">Contact me</h1>
			<form method="post" action="webDevelopment.php#alert" id="contact" class="form-horizontal  text-left">
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
					<textarea class="form-control" rows="4" cols="50" id="message" name="message" style="width:100%" placeholder= "Type message here..." ></textarea>
				</div>
				<input id="submitButton" type="submit" value="Submit" name="submit">
			</form>
		</div>
		<?php include 'footer.php' ?>
		<a href='#' class="back-to-top" style="display: inline;">
			<i class="fa fa-arrow-circle-up"></i>
		</a>
	</body>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>