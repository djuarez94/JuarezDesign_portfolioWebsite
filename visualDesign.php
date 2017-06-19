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
			$feedback = 'I apologize! We were unable to send from our hosted server. Please contact me directly <a href="mailto:davidjuarez1411@gmail.com">here</a>.';
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
        <title>Juarez Design : Visual Design</title>
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
					   <li class="active"><a href="visualDesign.php">Visual Design</a></li>
					   <li><a href="webDevelopment.php">Web Development</a></li>
					   <li class=""><a href="img/Stylesheets_dJuarez_SP17.compressed.pdf">Stylesheets</a></li>
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
			<h1 class="star">Visual Design</h1>
			<a href="#aboutMe"><img class="downArrow" src="img/workIcon.png"></a>
		</div>
		<div class="aboutMe">
			<div class="me">
				<img class="star" src="img/myPhoto.jpg" width="200px">
				<h2>David Juarez</h2>
				<h3>Visual Designer</h3>
			</div>
			<div class="para">
				<p>Welcome! I am David, and I am finishing up my senior year at Mt. Sierra College where I am persuing my Bachelor's Degree in Graphic Design. What made me go down the road of a Graphic Designer was my love for drawing and creating something for someone. I began drawing from a young age and this eventually evolved into becoming a hobby that I love to do. Now I want to use my passion for drawing and design in order to communicate with others visually through my work.</p>
			</div>
		</div>
		<div class="work">
			<h1 id="myWork" class="text-center">My Work</h1>
			<div id="columns">
				<figure class="star">
					<img style="width: 235px" src="img/DES230_DavidJuare_Wk7_StillLife_new.jpg">
					<h3>Digital Painting</h3>
					<button type="button" class="modalButton btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">View</button>
				</figure>
				 <!-- Modal -->
				 <div class="modal fade" id="myModal" role="dialog">
				   <div class="modal-dialog">

					 <!-- Modal content-->
					 <div class="modal-content">
					   <div class="modal-header">
						 <button type="button" class="close" data-dismiss="modal">&times;</button>
						 <img src="img/DES230_DavidJuare_Wk7_StillLife_new.jpg">
						 <h3 style ="text-align: center;">Digital Painting</h3>
					   </div>
					   <div class="modal-body">
						 <p>Created in Photoshop with softbrush.</p>
					   </div>
					   <div class="modal-footer">
						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					   </div>
					 </div>

				   </div>
				 </div>

				<figure class="star">
					<img style="width: 235px" src="img/DES231_DJuarez_ExeSkullPainting_Wk04_R1_new.jpg">
					<h3>Digital Painting</h3>
						<button type="button" class="modalButton btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">View</button>
				</figure>
				<div class="modal fade" id="myModal2" role="dialog">
				  <div class="modal-dialog">

					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<img src="img/DES231_DJuarez_ExeSkullPainting_Wk04_R1_new.jpg">
						<h3 style ="text-align: center;">Digital Painting</h3>
					  </div>
					  <div class="modal-body">
						<p>Created in Photoshop with softbrush.</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>

				  </div>
				</div>

				<figure class="star">
					<img style="width: 235px" src="img/DES231_DJuarez_PortaitPainting_small.png">
					<h3>Digital Painting</h3>
					<button type="button" class="modalButton btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">View</button>
				</figure>
				<div class="modal fade" id="myModal3" role="dialog">
				  <div class="modal-dialog">

					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<img src="img/DES231_DJuarez_PortaitPainting_small.png">
						<h3 style ="text-align: center;">Digital Painting</h3>
					  </div>
					  <div class="modal-body">
						<p>Created in Photoshop with softbrush.</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>

				  </div>
				</div>

				<figure class="star">
					<img style="width: 235px" src="img/DES231_DJuarez_Movie Poster_new.jpg">
					<h3>Poster Design</h3>
					<button type="button" class="modalButton btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">View</button>
				</figure>
				<div class="modal fade" id="myModal4" role="dialog">
				  <div class="modal-dialog">

					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<img src="img/DES231_DJuarez_Movie Poster_new.jpg">
						<h3 style ="text-align: center;">Poster Design</h3>
					  </div>
					  <div class="modal-body">
						<p>Created in Photoshop.</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>

				  </div>
				</div>

				<figure class="star">
					<img style="width: 235px" src="img/robotBody copy_new.png">
					<h3>Vector Illustration</h3>
					<button type="button" class="modalButton btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">View</button>
				</figure>
				<div class="modal fade" id="myModal5" role="dialog">
				  <div class="modal-dialog">

					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<img src="img/robotBody copy_new.png">
						<h3 style ="text-align: center;">Vector Illustration</h3>
					  </div>
					  <div class="modal-body">
						<p>Created in Illustrator.</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>

				  </div>
				</div>

				<figure class="star">
					<img style="width: 235px" src="img/robotHead_new.png">
					<h3>Vector Illustration</h3>
					<button type="button" class="modalButton btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6">View</button>
				</figure>
				<div class="modal fade" id="myModal6" role="dialog">
				  <div class="modal-dialog">

					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<img style="width: 235px" src="img/robotHead_new.png">
						<h3 style ="text-align: center;">Vector Illustration</h3>
					  </div>
					  <div class="modal-body">
						<p>Created in Illustrator.</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>

				  </div>
				</div>

				<figure class="star">
					<img style="width: 235px" src="img/cookCheck_Logo.png">
					<h3>Logo Design</h3>
					<button type="button" class="modalButton btn btn-info btn-lg" data-toggle="modal" data-target="#myModal7">View</button>
				</figure>
				<div class="modal fade" id="myModal7" role="dialog">
				  <div class="modal-dialog">

					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<img style="width: 235px" src="img/cookCheck_Logo.png">
						<h3 style ="text-align: center;">Vector Illustration</h3>
					  </div>
					  <div class="modal-body">
						<p>Created in Illustrator.</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>

				  </div>
				</div>

				<figure class="star">
					<img style="width: 235px" src="img/natureGoSip_Logo.png">
					<h3>Logo Design</h3>
					<button type="button" class="modalButton btn btn-info btn-lg" data-toggle="modal" data-target="#myModal8">View</button>
				</figure>
				<div class="modal fade" id="myModal8" role="dialog">
				  <div class="modal-dialog">

					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<img style="width: 235px" src="img/natureGoSip_Logo.png">
						<h3 style ="text-align: center;">Vector Illustration</h3>
					  </div>
					  <div class="modal-body">
						<p>Created in Illustrator.</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>

				  </div>
				</div>
			</div>
		</div>
		<div class="parallaxContact">
			<div class="contactQuote">
				<h2 class="star">"Any kind of innovation requires the ability to <strong>collaborate</strong> and <strong>share</strong> ideas with other people, and to sit down and <strong>talk</strong> with customers and get their feedback and <strong>understand</strong> their needs"</h2>
				<p class="star"><i>- Bill Gates</i></p>

			</div>
		</div>
		<?php if (!empty($feedback)) : ?>
			<div class="alert alert-info emailAlert" id ="alert">
				<?php echo $feedback; ?>
			</div>
		<?php endif; ?>
		<div class="contact" id="contactMe">
			<h1 class="text-center">Contact me</h1>
			<form method="post" action="visualDesign.php#alert" id="contact" class="form-horizontal  text-left">
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