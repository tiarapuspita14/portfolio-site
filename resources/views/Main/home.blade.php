<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<meta charset="UTF-8">
	<title>Animated Gradient background with pure css and html</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link href="/css/app.css" rel="stylesheet">
	<link href="/css/home.css" rel="stylesheet">
	{{-- owl css --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	{{-- vanila js --}}
	<script type="text/javascript" src="/js/vanilla-tilt.js"></script>
	{{-- owl caraousel --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>

		$(function() {

			$(".toggle").on("click", function(){

				if($(".items").hasClass("activ")) {
					$(".items").removeClass("activ");
				}
				else {
					$(".items").addClass("activ");
				}
			})

		});

	</script>
</head>
<body>
	<!--ini navbar nya-->
	<div class="bodeh">
		<nav class="navigation" style=" z-index: 9999;" id="navbar">
			<ul class="menu" id="myMenu">
				<li class="logo">
					<a  href="#home">Tiara Puspita</a>
				</li>
				<li class="items ">
					<a href="#home">Home</a>
				</li>
				<li class="items ">
					<a href="#about">About</a>
				</li>
				<li class="items ">
					<a href="#portfolio">Portfolio</a>
				</li>
				<li class="items ">
					<a href="#">Blog</a>
				</li>
				<li class="items ">
					<a href="/contact">Contact</a>
				</li>
				<li class="toggle">
					<span class="bars"></span>
				</li>
			</ul>
		</nav>

		<div id="home"  class="container" style="height:100% ;height: 100vh; margin-top:-60px" data-tilt-scale="1.1">
			<div class="container" style="height:100%; min-height:100vh" >
				<div class="cards" style="" data-tilt data-tilt-scale="1.1">
					<img class="" src="img/fp.png" style="" alt="Tiara Puspita" >
					<h2>Informatics Student</h2>
					<p>Hi, there! Get to know me more here<br>
						Feel free to contact or sincerely keep in touch with me on Social Media. Cheers! </p>
					<div class="link">
						<a href="https://www.instagram.com/tiarapus_/" role="button">
							<i class="fab fa-instagram icon iconify" data-icon="ion-social-instagram"></i>
						</a>
						<a href="https://www.linkedin.com/in/tiarapuspita-/" role="button">
							<i class="fab fa-linkedin icon iconify" data-icon="ion-social-linkedin"></i>
						</a>
						<a href="https://github.com/tiarapuspita14" role="button">
							<i class="fab fa-github icon iconify" data-icon="ion-social-github"></i>
						</a>
					</div>
				</div>
			</div>

			{{-- mobile --}}
		</div>
	
@include('partials.about')
<div class="jumbotron-fluid" style="margin-top: -80px;   width: 100%; background-size: cover; background-color:#3C0C42">
    <div class="container-fluid pt-none">
      <h1 class="display-4">Fluid jumbotron</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,202.7C384,192,480,128,576,90.7C672,53,768,43,864,58.7C960,75,1056,117,1152,133.3C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </div>
@include('partials.portfolio')

	</div>
	
	<script>
		var navbar = document.getElementById("navbar");
		var myMenu = document.getElementById("myMenu");

		window.onscroll = function(){
			if(window.pageYOffset > myMenu.offsetTop){
				navbar.classList.add("sticky");
			} else {
				navbar.classList.remove("sticky");
			}
		}
	</script>
	{{-- vanila js --}}
	<script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".cards"), {
		max: 25,
		speed: 400,
	});
	</script>
	{{-- init owl --}}
    <script>
		$('.owl-carousel').owlCarousel({
		  // loop:true,
		  margin:10,
		  nav:true,
		  responsive:{
			  0:{
				  items:1
			  },
			  600:{
				  items:1
			  },
			  1000:{
				  items:1
			  }
		  }
	  })
	  </script>
</body>
</html>
