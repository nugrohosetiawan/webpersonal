<!DOCTYPE>
<html>
<head>
	<?php include("include/headers.php");?>
	<title></title>
</head>
<body>
	<?php include("include/navigation.php");?>
	<div class="container">
		<h3> <br/><br/>Software Process Activity </h3>
		<p style="text-align: justify;">The four basic process activities of specification, development, validation and evolution are organised differently in different development processes. In the waterfall model, they are organised in sequence, whereas in evolutionary development they are interleaved. How these activities are carried out depends on the type of software, people and organisational structures involved.</p>

		<p>Any software process must include the following four activities: <br/>

		<b>1. Software specification (or requirements engineering)</b> <br/> Define the main functionalities of the software and the constrains around them. <br/>
		<b>2. Software design and implementation </b><br> The software is to be designed and programmed.<br>
		<b>3. Software verification and validation <br/></b>
		The software must conforms to it’s specification and meets the customer needs.<br/>
		<b>4. Software evolution (software maintenance)</b> <br/>
		The software is being modified to meet customer and market requirements changes.
		In practice, they include sub-activities such as requirements validation, architectural design, unit testing, …etc.
	</p>


	</div>

<div class="container">
    
		  <div class="text-center"><br/>
        <h2> Reseach Area</h2> <br/>
      </div>
			<img src="https://cdn-images-1.medium.com/max/1600/1*ApoaIZicyU0b7Jgg9MMJhw.jpeg" class="img-fluid" alt="Responsive image">

		<h4> <br>Motivation </h4>
		<blockquote class="blockquote">
		  <p class="mb-0">A good software should deliver the main required functionality.</p>
		  <footer class="blockquote-footer">Other set of attributes — called quality or non-functional — should be also delivered. Examples of these attributes are, the software is written in a way that can be adapted to changes, response time, performance (less use of resources such as memory and processor time), usable; acceptable for the type of the user it’s built for, reliable, secure, safe, …etc. <cite title="Source Title">Omar El Gabry</cite></footer>
		</blockquote>
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