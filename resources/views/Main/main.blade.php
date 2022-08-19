<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/text.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    	{{-- owl css --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    

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
    <nav class="navigation" style=" z-index: 9999;" id="navbar">
        <ul class="menu" id="myMenu">
            <li class="logo">
                <a  href="#home">Tiara Puspita</a>
            </li>
            <li class="items ">
                <a href="#about">About</a>
            </li>
            <li class="items ">
                <a href="#work">Work</a>
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
    <div class="jumbotron" id="home" >
        <div class="container">
            <div class="col-lg-8" style="margin-top:-20rem"  >
                <div style="margin-top:10rem" class="teks-box">
                    <p style="font-size:40px">
                        A highly <b style="font-style: italic">motivated</b> and <b style="font-style: italic">responsible</b> person. I have a huge interest in web development and machine learning.
                    </p>
                </div>
                <div style="margin-top:2rem" class="teks-box">
                    <p style="font-size:40px">
                        Anyway, My name is Tiara , and am an undergraduate Informatics Engineering student at Gunadarma University.
                    </p>
                </div>
            
            </div>
            <div class="col-lg-4">
                <img class="img-thumbnail" src="img/fp.png" alt="" style="">
            </div>
            </div>
        </div>
        <div class="container-fluid mx-0 align-items-center text-center" style="width:100%;background-color: black; padding-left:20%; padding-right:20%; padding-top:20%; padding-bottom:20%">
            <div data-aos="zoom-in-up">
            <p class="text-white display-3">"Educating the mind without educating the heart is no education at all."</p>
            <footer class="blockquote-footer">Aristotle</footer>
            </div>
        </div>
        <div id="about"class="container-fluid mx-0" style="width:100%;background-color: black; min-height:100vh">
            @include('partials.sectionAbout')
        </div>
        <div id="work"class="container-fluid mx-0" style="width:100%;background-color: black; min-height:100vh">
            @include('partials.sectionWork')
        </div>
        <div class="jumbotron text-white" style="background-color:black">
            <div class="container">
                <div data-aos="fade-up"data-aos-anchor-placement="top-bottom" class="text-center">
                    <span class="display-3" style="">“When you change your thoughts, remember to also change your world.”</span>
                    <footer class="blockquote-footer pt-2">Norman Vincent Peale</footer>
                </div>
            </div>
        </div>
        <div class="jumbotron" style="height:100%; height:100vh">
            <div data-aos="zoom-in-down">
                <h3 class="text-center" style="padding-top:30%; padding-bottom:none">Let's have a chat!</h3>
                <h6 class="text-center">or stay in touch with me on social media</h6>
            </div>
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
{{-- script needed --}}
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
{{-- owl caraousel --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  AOS.init();
</script>

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
{{-- parallax --}}
<script>
    $(window).scroll(function(){
        var wScroll = $(this).scrollTop();

        $('.jumbotron p').css({
            'transform':'translate(0px, '+ wScroll/1.5 +'%)'
        })
        $('.jumbotron img').css({
            'transform':'translate(0px, '+ wScroll/4 +'%)'
        })
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
{{-- all text animation source : https://alvarotrigo.com/blog/css-text-animations/ --}}