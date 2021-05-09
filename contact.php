<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta-tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="nextoc">
    <meta name="author" content="">
    <meta name="theme-color" content="#102236">
    <title>N E X T O C</title>

    <!-- og-tags -->
    <meta property="og:title" content="" />
    <meta property="og:site_name" content=" "/>
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content=""/>

    <!-- Link css -->
    <link rel="icon" href="assets/images/site_icon.png">
    <link rel="stylesheet" href="./assets/styles/bootstrap4.min.css">
    <link rel="stylesheet" href="./assets/styles/animate.css">
    <link rel="stylesheet" href="./assets/styles/swiper.min.css">
    <link rel="stylesheet" href="./assets/styles/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/normal_style.css">
</head>
<body>


   <!--------- preloader-start ---------->
   <div class="preloader__new">
	<div class="preloader__img">
	  <img loading="lazy" src="./assets/images/logo.png" class="eyez" alt="">
	</div>
</div>
  <!---------- preloader-end ----------->


<!--=====================================================
					HEADER-SECTION
======================================================-->    
<section class="header_section another_page">
    <div class="container">
        <div class="header_wrapper">
            <div class="logo_img">
                <a href="index.php"><img src="./assets/images/logo.png" class="img-fluid" alt=""></a>
            </div>
            <div class="hamburger_menu">
                <h3>MENU</h3>
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </div>
</section>

<!-- menu -->
<div class="menu_section">
	<div class="close_menu">
	   <i class="fa fa-times"></i>
	</div>
	<ul>
	   <li><a href="index.php">HOME</a></li>
	   <li><a href="contact.php">Contact Us</a></li>
	</ul>
	
	<a href="https://wa.me/917994400907?text=Hi Nextoc, help me get started! 😊" target="_blank"" class="start_with_us">Start with us <i class="fa fa-whatsapp"></i></a>
 </div>




<!-- ======= Contact Section ======= -->
<div class="map-section">
	<iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
  </div>

  <section id="contact" class="contact">
	<div class="container">

	  <div class="row justify-content-center" data-aos="fade-up">

		<div class="col-lg-10">

		  <div class="info-wrap">
			<div class="row">
			  <div class="col-lg-4 info">
				<i class="fa fa-map-marker"></i>
				<h4>Location:</h4>
				<p>Dummy Building, Calicut, Kerala , India</p>
			  </div>

			  <div class="col-lg-4 info mt-4 mt-lg-0">
				<i class="fa fa-envelope"></i>
				<h4>Email:</h4>
				<p><a href="mailto:nextocofficial@gmail.com" class="__cf_email__" >nextocofficial@gmail.com</a><br>
					</p>
					<p><a href="mailto:info@nextoc.com" class="__cf_email__" >info@nextoc.com</a><br>
					</p>
			  </div>

			  <div class="col-lg-4 info mt-4 mt-lg-0">
				<i class="fa fa-phone"></i>
				<h4>Call:</h4>
				<p>+ 91 7994400907</p>
			  </div>
			</div>
		  </div>

		</div>

	  </div>

	  <div class="row mt-3 justify-content-center" data-aos="fade-up">
		<div class="col-lg-10">
		  <form action="#" method="post" role="form" class="php-email-form">
			<div class="row">
			  <div class="col-md-6 form-group">
				<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
			  </div>
			  <div class="col-md-6 form-group mt-3 mt-md-0">
				<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
			  </div>
			</div>
			<div class="form-group mt-3">
			  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
			</div>
			<div class="form-group mt-3">
			  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
			</div>
			<div class="my-3">
			  <div class="loading">Loading</div>
			  <div class="error-message"></div>
			  <div class="sent-message">Your message has been sent. Thank you!</div>
			</div>
			<div class="text-center"><button type="submit">Send Message</button></div>
		  </form>
		</div>

	  </div>

	</div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->


<?php include "./footer_common.php" ?>	

<script>
	function openCity(evt, cityName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.className += " active";
	}
	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
	</script>
	<script>
			// Add the following code if you want the name of the file appear on select
	$(".custom-file-input").on("change", function() {
	var fileName = $(this).val().split("\\").pop();
	$(this).siblings(".custom-file-label").addClass("selected").php(fileName);
	});
	</script>

</body>
</html>