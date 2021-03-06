<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Mamouth</title>
	<meta content="" name="description">
	<meta content="" name="keywords">
	<meta content="Mamouth" name="Mamouth">
	<link href="m.ico" rel="shortcut icon">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700i" rel="stylesheet">
	<link href="css/demo.css" rel="stylesheet" type="text/css">
	<link href="css/component.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/vaakash/socializer/a4c672bf/css/socializer.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<script>
	   document.documentElement.className = 'js';
	   </script>
</head>
<body class="demo-2">
	<svg class="hidden">
	<symbol id="icon-caret" viewbox="0 0 24 24">
		<title>caret</title>
		<polygon points="15.7,16.6 11.1,12 15.7,7.4 14.3,6 8.3,12 14.3,18"></polygon>
	</symbol></svg> <video autoplay="" loop=""><source src="2015-12-04-cave.webm" type="video/mp4"></video>
	<div class="overlay">
		<div class="language-container">
				<a class="language" id="language-fr" href="#">FR </a>
					<a class = "language" id="language-slash" style="color:#dedede;"> / </a>
						<a class="language" id="language-en" href="index2.php">EN</a>
		</div>
		<div class="flex-title">
			<div class="sub-flex-title">
				<div class ="title-ctn-flex">
					<h1 id="MA">Mamouth</h1>
				</div>
					<p>De jeunes étudiants aux services de vos projets à moindres coûts. </p>  <!-- Our favorite project? That's the next one. -->
					<div class="btt-a-ctn">
					<div class="btt-a">
						<a class="btt" target="_blank" href="img/Mamouth.pdf">Nos compétences </a>
					</div>
				</div>
				<div class="social-container">
						<div class="social-bar-container">
							<div class="social-bar"></div>
						</div>
						<div class="social-links-container">
							<a class="social-link" href="#"><i class="fab fa-instagram"></i></a>
							<a class="social-link" href="#"><i class="fab fa-behance"></i></a>
<!--							<a class="social-link" href="#"></a>
							<a class="last-social-link social-link" href="#"></a>
							--><div class="modal-content-links_btn">
                    						<li data-toggle="tooltip" data-placement="top"><a href="<?php echo get_facebook_url(intval($id), "p"); ?>" target="_blank" rel="noopener" class="display_inherit"><i class="fab fa-facebook-f"></i></a></li>
                					    	<li data-toggle="tooltip" data-placement="top"><a href="<?php echo get_twitter_url(intval($id), wp_kses(strip_tags($title), $allowed_html), "p"); ?>" data-via="@AccorHotelsNews" data-lang="fr" target="_blank" rel="noopener" class="display_inherit"><i class="fab fa-twitter"></i></a></li>
                    						<--!<li><a download href="<?php echo $src; ?>" class="btn btn-share"><i class="fas fa-file-download"></i></a></li>
                    						<li><a download href="<?php echo $srcHD; ?>" class="btn btn-share"><i class="fas fa-download"></i></a></li>-->
               						</div>

						<!--	<a class="sr-github socializer a sr-32px sr-icon-white sr-bg-none sr-pad"><a href="https://www.github.com/" title="Github"><i class="fa fa-github"></i></a> -->
						</div>
				</div>	

</div>
			</div>
</div>
	<nav class="tabsnav tabsnav--vertical tabsnav--zeru">
		<div class="tabsnav__item">
			<div class="tabsnav__bar"></div>
			<h3 class="tabsnav__title">CONTACT</h3>
		</div>
		<div class="tabsnav__item">
			<div class="tabsnav__bar"></div>
			<h3 class="tabsnav__title"> MAMOUTH </h3>
		</div>
</div>
	</nav><!-- CONTACT -->
	<div class="tabscontent">
		<div class="tabscontent__item">
			<div class="column" id="contact">
				<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
				<div class="formulaire">
					<form id="contact-form" method="post" action="mail.php">
<!--					<p>Chère Mamouth,</p>
						<p>Je <label for="nom">m'appelle</label> <input id="your-name" name="nom" placeholder="(Votre nom)" required="" type="text"> <br> & </p>
						<p>mon <label for="email">adresse mail</label> est <input id="email" name="email" placeholder="(Votre adresse mail)," required="" type="email"></p>
						<p>Mon <label for="message"></label> message, </p>
						<p>
						<textarea class="expanding" id="your-message" name="message" placeholder="(Votre message)" required=""></textarea></p>
						<p><button type="submit"><svg class="send-icn" height="36px" version="1.1" viewbox="0 0 100 36" width="100px" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
						<path d="M100,0L100,0 M23.8,7.1L100,0L40.9,36l-4.7-7.5L22,34.8l-4-11L0,30.5L16.4,8.7l5.4,15L23,7L23.8,7.1z M16.8,20.4l-1.5-4.3 l-5.1,6.7L16.8,20.4z M34.4,25.4l-8.1-13.1L25,29.6L34.4,25.4z M35.2,13.2l8.1,13.1L70,9.9L35.2,13.2z"></path></svg> <small>Envoyer</small></button></p>-->
						<div class="test">
							<div>
								<p>Chère Mamouth,<br>
								Je m'appelle <input id="your-name" name="nom" placeholder="(Votre nom)" required="" type="text"> <br> & </p>
							</div>	
							<div>
								<p>mon adresse mail est <br> <input id="email" name="email" placeholder="(Votre adresse mail)," required="" type="email"></p>
								<p>Mon  message,<br> </p>
							</div>
							<div>
								<textarea class="expanding" id="your-message" name="message" placeholder="(Votre message)" required=""></textarea>
								<button type="submit"><svg class="send-icn" height="36px" version="1.1" viewbox="0 0 100 36" width="100px" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
								<path d="M100,0L100,0 M23.8,7.1L100,0L40.9,36l-4.7-7.5L22,34.8l-4-11L0,30.5L16.4,8.7l5.4,15L23,7L23.8,7.1z M16.8,20.4l-1.5-4.3 l-5.1,6.7L16.8,20.4z M34.4,25.4l-8.1-13.1L25,29.6L34.4,25.4z M35.2,13.2l8.1,13.1L70,9.9L35.2,13.2z"></path></svg> <small>Envoyer</small></button>
							</div>
						</div>
						</form>
				</div>
			</div>
		</div><!-- ABOUT US -->
		<div class="tabscontent__item">
			<div class="column" id="mamouth-text">
				<div class="txt">
					<h1 class="tile">À PROPOS DE NOUS</h1>
					<div class="IT">
						<h2 style="color:#ff764b; font-weight:normal">Qui sommes nous ?</h2>
						<p> Hello !
						Nous sommes un collectif de 4 jeunes étudiants en <a class="texte">école d'ingénieur informatique </a> . Chaque jour à la recherche de nouveaux défis et de nouvelles expériences, nous voulons développer notre savoir-faire en entreprise. 
						Dans cette perspective nous avons créé<!-- <a class="texte"> --> Mamouth. <br> <br>
						Mamouth vous prête ses services professionnels à moindres coût.
						C'est du gagnant gagnant : un <a class="texte"> coût avantageux </a> pour vous et un <a class="texte"> gain en expérience </a>  pour nous. 
						Alors n'hésitez pas et contactez nous afin de nous faire part de vos projets.
						C'est avec grand plaisir que nous vous écouterons et vous accompagnerons. <br> <br> 
						Au plaisir de vous rencontrer prochainement. <br>
						L'équipe Mamouth. 
						</p>
					</div>
				</div>
			</div>
			<div class="column" id="mamouth-img">
				<img src="img/IT2.png" style="float: right; width: 80%;">
			</div>
		</div>
		<button class="btn btn--back"><svg class="icon icon--caret">
		<use xlink:href="#icon-caret"></use></svg></button>
	</div>
	<script src="js/anime.min.js">
	</script>
	<script src="js/enquire.min.js">
	</script>
	<script src="js/tabsnav.js">
	</script>
	<script src="js/demo2.js">
	</script>
</body>
</html>
