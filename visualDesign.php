<!doctype html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <title>Visual Design</title>
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
				 <a class="navbar-brand" href="index.php"><img src="img/juarezDesign_Logo.png" alt="Site Logo"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
					   <li class="active"><a href="webDevelopment.php">Web Development</a></li>
					   <li><a href="visualDesign.php">Visual Design</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="parallaxDesign">
			<div class="aboutMe">
				<img src="img/myPhoto.jpg" width="200px">
				<h2>David Juarez</h2>
				<h3>Visual Designer</h3>
				<p>My time at Mt Sierra College has also introduced me to web design and computer programming. Ever since I got my hands wet in the design and programming field, I have become increasingly attached to my work. I have a constant thirst to learn as much as I can about computer programming/ web design.</p>
			</div>
		</div>
		<div class="work">
			<h1 id="myWork" class="text-center">My Work</h1>
			<!-- <div class="gallery">
				<img src="img/DES230_DavidJuare_Wk7_StillLife_new.jpg">
				<img src="img/DES231_DJuarez_ExeSkullPainting_Wk04_R1_new.jpg">
				<img src="img/DES231_DJuarez_PortaitPainting_Wk06-1_new.jpg">
				<img src="img/DES231_DJuarez_Movie Poster_new.jpg">
				<img src="img/robotBody copy_new.png">
				<img src="img/robotHead_new.png">
				<img src="img/cookCheck_Logo.png">
				<img src="img/natureGoSip_Logo.png">
			</div> -->


			<div id="columns">
				<figure>
					<img style="width: 235px" src="img/DES230_DavidJuare_Wk7_StillLife_new.jpg">
					<h3>Digital Painting</h3>
					<figcaption>Created in Photoshop with softbrush.</figcaption>
				</figure>

				<figure>
					<img style="width: 235px" src="img/DES231_DJuarez_ExeSkullPainting_Wk04_R1_new.jpg">
					<h3>Digital Painting</h3>
					<figcaption>Created in Photoshop with softbrush.<figcaption>
				</figure>

				<figure>
					<img style="width: 235px" src="img/DES231_DJuarez_PortaitPainting_small.png">
					<h3>Digital Painting</h3>
					<figcaption>Created in Photoshop with softbrush.</figcaption>
				</figure>

				<figure>
					<img style="width: 235px" src="img/DES231_DJuarez_Movie Poster_new.jpg">
					<h3>Poster Design</h3>
					<figcaption>Created in Photoshop.</figcaption>
				</figure>

				<figure>
					<img style="width: 235px" src="img/robotBody copy_new.png">
					<h3>Vector Illustration</h3>
					<figcaption>Created in Illustrator.</figcaption>
				</figure>

				<figure>
					<img style="width: 235px" src="img/robotHead_new.png">
					<h3>Vector Illustration</h3>
					<figcaption>Created in Illustrator.</figcaption>
				</figure>

				<figure>
					<img style="width: 235px" src="img/cookCheck_Logo.png">
					<h3>Logo Design</h3>
					<figcaption>Created in Illustrator.</figcaption>
				</figure>

				<figure>
					<img style="width: 235px" src="img/natureGoSip_Logo.png">
					<h3>Logo Design</h3>
					<figcaption>Created in Illustrator.</figcaption>
				</figure>
			</div>
		</div>
		<div class="parallaxDesign">
			<div class="contactQuote">
				<h2>"Any kind of innovation requires the ability to collaborate and share ideas with other people, and to sit down and talk with customers and get their feedback and understand their needs"</h2>
				<p><i>- Bill Gates</i></p>

			</div>
		</div>
		<div class="contact" id="contact">
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