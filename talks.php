<!DOCTYPE>
<html>
<head>
	<?php include("include/headers.php");?>
	<title></title>
</head>
<body>
	<?php include("include/navigation.php");?>
	<div class="container">
	<div id="main-wrapper">
		<article>
		<h3><br/><br/>Talks in Scientific Meetings </h3>
		<h5>The scientific presentation I have ever done</h5>
		<hr class="my-4">
		<div class="owl-carousel">
                       <div class="item">
                           <img src="image/icitisee2017.jpg" class="img-thumbnail" alt="Responsive image">
                       </div>

                       <div class="item">
                           <img src="image/bootstrap.png" class="img-thumbnail" alt="Responsive image">                              
                       </div>
                       <div class="item">
                            <img src="image/bootstrap.png" class="img-thumbnail" alt="Responsive image">                              
                       </div>       
                         
            </div>

		<ul>
			<li><p><b>WSN Optimization</b> - "Developing Mathematical Modelling and Indoor Parameter Estimation for Incerasing WSN Avaliability" Preparing for submitted to Q-Journal Rankings  <br></li></p> </li> 

			Collaboators : Bobby Rian Dewangga <br/>
			Under Supervision : I Wayan Mustika Ph.D and Dr.Eng Adha Imam Cahyadi <br>
			Timeline : 2018 - present <br/>
				<ul>
				<li> As main researcher</li>
			    </ul>

			

		

		<hr class="my-4">
		</article>
	</div>
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
			
				


		  	</script>

</body>
</html>