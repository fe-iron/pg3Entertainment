<style type="text/css">

	@import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');






	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}


	h1,h2,h3,h4,h5,h6{
		font-family: 'Bebas Neue', cursive;
		letter-spacing: 2.5px;
	}


	a,p,.card, option{
		font-family: 'Rubik', sans-serif;
	}

	::placeholder{
		font-family: 'Rubik', sans-serif;

	}



	.line {
		background-color: #d73e4d;
		height: 5px;
		width: 100%;
	}


	.line_1 {
		background-color: #d73e4d;
		height: 3px;
		width: 100%;
	}

	.header-part{
		position: fixed;
		top: 0;
		z-index: 2;
		width: 100%;
	}
	

	.navbar-fixed-top.scrolled {
		background-color: black !important;
		transition: background-color 200ms linear;
		z-index: 1000;
	}


	.header-part .bg-dark {
		background-color: #343a40d1!important;
	} 


	.header-part .navbar .navbar-nav .nav-item .nav-link{

		font-size: 16px;

	}


	.header-part .navbar .navbar-brand img{
		width: 110px;
		height: 68px;
	}

	/*.active{
		color: white;
	}*/





	/*media query*/


	@media(max-width: 768px){

		.navbar-toggler{
			display: none;
		}

		.line_1 {
			background-color: #d73e4d;
			height: 2px;
			width: 100%;
		}


		.navbar-text1{
			display: block;
		}

		.navbar-text1 .btn-danger{

			font-size: 12px
		}


		.navbar-text1 img{
			width: 32px;
		}


		.navbar-text1 span{
			font-size: 12px;
			color: white;
		}

	}


	@media(max-width: 576px){
		.header-part .navbar .navbar-brand img {
			width: 57px;
			height: 40px;
		}

		.navbar {
			position: relative;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-webkit-box-pack: justify;
			-ms-flex-pack: justify;
			justify-content: space-between;
			padding: 0rem 1rem;
		}


		.about-banner, .contact-banner ,.registration-banner , .media_banner,.gallery_banner {
			padding: 5rem 0rem 2rem 0rem;
		}	

		.about-banner h1, .contact-banner h1,.registration-banner h1, .media_banner h1, .gallery_banner h1{

			font-size: 1.5rem;
		}


	}

	@media( min-width: 992px){

		.navbar-text1 {
			display: none;
		}


	}




	@media (min-width: 992px){
		.navbar-expand-lg .navbar-nav .nav-link {
			padding-right: 1rem;
			padding-left: 1rem;
		}
	}





</style>



<section class="header-part navbar-fixed-top" id="topheader">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar-top">
		<a class="navbar-brand" href="#"><img src="images/logo.png"></a>
		<span class="navbar-text1">
			<a class="btn btn-danger text-white" href="registration_form.php">Register Now!!</a>
			<a class="icons-whatsapp ml-2" href="#"><img src="images/icons-whatsapp.svg">
				<span class="mb-0 mt-2">+91-9540126057</span>
			</a>
		</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>

		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="media_coverage.php">Media Coverage</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Stay Connected</a>
				</li>
			</ul>
			<span class="navbar-text">
				<a class="btn btn-danger text-white" href="registration_form.php">Register Now!!</a>
				<a class="icons-whatsapp ml-2" href="#"><img src="images/icons-whatsapp.svg">
					<span class="mb-0 mt-2">+91-9540126057</span>
				</a>
			</span>
		</div>
	</nav>
</section>



<script type="text/javascript">

	// const currentLocation= location.href;
	// const menuLink= document.querySelectorAll('a');
	// const menuLength= menuLink.length;
	// 	for (let i =0; i< menuLength; i++) {
	// 		if (menuLink[i].href===currentLocation) {

	// 			menuLink[i].className = "active"
	// 		}
	// 	}
	
</script>


</body>
</html>