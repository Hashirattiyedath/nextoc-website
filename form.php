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


<form method="POST" data-aos="fade-up">
	<div class="mains">
		<div class="container main">
			<div class="tab">
				<button class="tablinks" onclick="openCity(event, 'Personal-Details')" id="defaultOpen">Personal Details</button>
				<button class="tablinks" onclick="openCity(event, 'Upload-Documents')">Upload Documents</button>
				<button class="tablinks" onclick="openCity(event, 'Confirmation')">Confirmation</button>
			</div>
				<div class="form join_us_forms"> 
				<div id="Personal-Details" class="tabcontent">
					<div class="container">
						<div class="row mb-3 mt-3">
							<div class="col-lg-2 col-md-6 mb-3">
								<label for="inputbranch">Prefered Branch</label>
								<select class="custom-select mr-sm-2" id="inputbranch" required>
									<option selected>Choose...</option>
									<option value="1">Head Office</option>
								</select>
							</div>
							<div class="col-lg-4 col-md-6 col-md-6 mb-3">
								<label for="inputname">Name</label>
								<input type="text" class="form-control" placeholder="Enter your name" id="inputname" required>
							</div>
							<div class="col-lg-3 col-md-6 mb-3">
								<label for="inputmstatus">Marital Status</label>
								<select class="custom-select mr-sm-2" id="inputmstatus" required>
									<option selected>Choose</option>
									<option value="1">Married</option>
									<option value="2">single</option>
								</select>
							</div>
							<div class="col-lg-3 col-md-6 mb-5">
								<label for="inputsex">Sex</label>
								<select class="custom-select mr-sm-2" id="inputsex" required>
									<option selected>Choose</option>
									<option value="1">Male</option>
									<option value="2">Female</option>
									<option value="3">Other</option>
								</select>
							</div>
							<div class="col-lg-4 col-md-6 mb-3">
								<label for="inputdob">Date Of Birth</label>
								<input type="date" class="form-control" id="inputdob" name="inputdob" required>
							</div>
							<div class="col-lg-4 col-md-6 mb-3">
								<label for="inputemail">Email <span style="color:#6c757d">(optional)</span> </label>
								<input type="email" class="form-control" id="inputemail" placeholder="you@example.com" required>
							</div>
							<div class="col-lg-4 col-md-6 mb-5">
								<label for="inputnominee">Nominee Name</label>
								<input type="text" class="form-control" id="inputnominee" name="inputnominee" placeholder="Nominee Name" required>
							</div>
							
							<div class="col-lg-3 col-md-6 mb-3">
								<label for="inputaddress">Address</label>
								<input type="text" class="form-control" placeholder="House/Building Name" id="inputaddress" required>
							</div>
							<div class="col-lg-3 col-md-6 mb-3">
								<label for="inputaddress2">Address 2 <span style="color:#6c757d">(optional)</span></label>
								<input type="text" class="form-control" placeholder="Street Name, Place" id="inputaddress2" required>
							</div>
							<div class="col-lg-2 col-md-6 mb-3">
								<label for="inputcountry">Country</label>
								<select class="custom-select mr-sm-2" id="inputcountry" required>
									<option selected>Choose</option>
									<option value="1">India</option>
								</select>
							</div>
							<div class="col-lg-2 col-md-6 mb-3">
								<label for="inputstate">State</label>
								<select class="custom-select mr-sm-2" id="inputstate" required>
									<option selected>Choose</option>
									<option value="1">Kerala</option>
								</select>
							</div>
							<div class="col-lg-2 col-md-6 mb-5">
								<label for="inputzip">Zip</label>
								<input type="text" name="inputzip" id="inputzip" class="form-control" placeholder="PIN Code" required>
							</div>
						</div>
					</div>
					<div class="next-button nxt-btn">
						<button type="button" class="btn btn-success tablinks" onclick="openCity(event, 'Upload-Documents')"> Next
						<i class="fa fa-arrow-circle-right next-i" aria-hidden="true"></i>
						</button>
					</div>
				</div>
				
				<div id="Upload-Documents" class="tabcontent">
					<div class="container">
						<div class="row mt-3 mt-3 mb-3">
							<div class="col-md-6">
								<div class="input-group">
									<p>Upload Photo</p>
									<div class="custom-file ">
										<input type="file" class="custom-file-input" id="inputGroupFile01">
										<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<p>Signature</p>
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="inputGroupFile01">
										<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-md-6 pannumber">
								<label for="inputpan">PAN Number</label>
								<input type="text" name="inputpan" id="inputpan" class="form-control" placeholder="PAN Number" required>
							</div>
							<div class="col-md-6">
								<div class="input-group uploadpan">
									<p>Upload PAN</p>
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="inputGroupFile01">
										<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-4 mb-3">
							<div class="col-lg-6 col-md-12">
								<div class="grouping">
									<h6 class="idgrouping">ID Details</h6>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">ID Proof</span>
										</div>
										<select class="custom-select mr-sm-2" id="inputidproof" required>
											<option selected>Select the ID type</option>
											<option value="1">Aadhaar Card</option>
											<option value="2">Ration Card</option>
											<option value="3">Election Id</option>
										</select>
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">Document Number</span>
										</div>
										<input type="text" name="inputzip" id="inputdocument" class="form-control" required>
									</div>
									<div>
										<label>Upload ID Proof Slide 1</label>
										<div class="custom-file">
											<label class="custom-file-label" for="customFile">Choose File</label>
											<input type="file" class="form-control custom-file-input" id="customFile" required>
										</div>
									</div>
									<div>
										<label class="mt-3">Upload ID Proof Slide 2</label>
										<div class="custom-file">
											<label class="custom-file-label" for="customFile">Choose File</label>
											<input type="file" class="form-control custom-file-input" id="customFile" required>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="grouping address">
									<h6 class="addressgrouping">Address Details</h6>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">Address Proof</span>
										</div>
										<select class="custom-select mr-sm-2" id="inputidproof" required>
											<option selected>Select the ID type</option>
											<option value="1">Aadhaar Card</option>
											<option value="2">Ration Card</option>
											<option value="3">Election Id</option>
										</select>
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">Document Number</span>
										</div>
										<input type="text" name="inputzip" id="inputdocument" class="form-control" required>
									</div>
									<div>
										<label>Upload Address Proof Slide 1</label>
										<div class="custom-file">
											<label class="custom-file-label" for="customFile">Choose File</label>
											<input type="file" class="form-control custom-file-input" id="customFile" required>
										</div>
									</div>
									<div>
										<label class="mt-3">Upload Address Proof Slide 2</label>
										<div class="custom-file">
											<label class="custom-file-label" for="customFile">Choose File</label>
											<input type="file" class="form-control custom-file-input" id="customFile" required>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-6 ">
								<div class="previous-button">
									
									<button type="button" class="btn btn-secondary tablinks" onclick="openCity(event, 'Personal-Details')">
									<i class="fa fa-arrow-circle-left  previous-i" aria-hidden="true"></i> Previous</button>
								</div>
							</div>
							<div class="col-6 ">
								<div class="next-button button-two">
									<button type="button" class="btn btn-success tablinks" onclick="openCity(event, 'Confirmation')"> Next
									<i class="fa fa-arrow-circle-right  next-i" aria-hidden="true"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div id="Confirmation" class="tabcontent">
					<div class="container mt-3">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
							<label class="form-check-label" for="flexCheckChecked"><p style="color: black">I read and accept the privacy policy of Coxtaax.</p></label>
						</div>
						<div class="savebutton">
							<div class="previous-button">
								<button type="button" class="btn btn-secondary tablinks" onclick="openCity(event, 'Upload-Documents')"><i class="fa fa-arrow-circle-left previous-i" aria-hidden="true"></i> Previous</button>
								
							</div>
							<div class="savedata-button">
								<button type="submit" class="btn btn-success">Save Data</button>
							</div>
						</div>
					</div>
				</div>
			</div>	
			</form>
			
		</div>
	</div>


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