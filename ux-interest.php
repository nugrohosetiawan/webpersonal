<!DOCTYPE>
<html>
<head>
	<?php include("include/headers.php");?>
	<title></title>
</head>
<body>
	<?php include("include/navigation.php");?>
	<div class="container">
		<h3> <br/><br/>UI/UX Research </h3>
		<p>Research and learning for <b>applying user experience method and concept to address a challenging real world user experience problem </b> in coordination with a project client (industry, non-profit, goverment or acedemic partner). <br/>
		Creating working team atmosphere to <b>define and develop</b> the project, as measured by progress on regular milestone assignments. To reach the goal its can be achieve with working together to elicit, clarify and formalize client requirements, analyze and assess user experience  requierements and needs with project-appropriate methods.</p> 

		<p>After the projects is well defined. The next step is developing projects. The standart in UI/UX Research is doing some iteratively design, prototype, and refine user experiences that address the project’s requirements and users needs. After that we try to validate the developed prototype(s) with project-appropriate usability and user experience evaluation techniques. Trying to Effectively presenting work to stakeholders (client, instructor, fellow students) in stand-up meetings, formal presentations and written reports.</p>


	</div>

<div class="container">
    
		  <div class="text-center"><br/>
        <h2> Reseach Area</h2> <br/>
      </div>
			<div class="owl-carousel">
                       <div class="item">
                           <img src="image/ucd.png" class="img-thumbnail" alt="Responsive image">
                       </div>

                       <div class="item">
                           <img src="image/ixd.jpg" class="img-thumbnail" alt="Responsive image">                              
                       </div>
                       <div class="item">
                            <img src="image/ia.jpg" class="img-thumbnail" alt="Responsive image">                              
                       </div>       
                         
            </div>

		<h4> <br>Skill Set and Tools :</h4>
		<p>To achieve the goals we always improve our skills in :</p>
		<ul>
			<li> Using digital product design platform </li>
			<li> HTML, CSS, JS</li>
			<li> Slicing PSD to HTML </li>
		</ul>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>


		<?php include("include/footer.php");?>

<script type="text/javascript">
		
			$(".owl-carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout:1000,
                autoplayHoverPause:true,
                loop: true,
                margin: 10,
                responsiveClass: true,
                navText : ["<i class='fa fa-chevron-left' aria-hidden='true'></i>","<i class='fa fa-chevron-right' aria-hidden='true'></i>"],
                responsive: {
                    0:{
                        items: 1,
                        nav: false,
                        dots: true,
                        margin: 0
                    },
                    600:{
                        items: 2,
                        nav: false,
                        dots: true,
                        margin: 25
                    },
                    768: {
                        items: 3,
                        nav: false,
                        dots: true,
                        margin: 25
                    }
                }
            });


           $(document).ready(function(){
            $(window).scroll(function(){
              var scroll = $(window).scrollTop();
              if (scroll > 50) {
                $("#mainNav").css("background" , "#f8f9fa");
              }

              else{
                $("#mainNav").css("background" , "transparent");   
              }
            })
          });
			
				


		  	</script>


	


</body>
</html>