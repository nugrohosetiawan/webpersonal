<!DOCTYPE>
<html>
<head>
  <?php include("include/headers.php");?>
  <title></title>
</head>
<body>
  <?php include("include/navigation.php");?>
  <div class="container">
    <h3> <br/><br/>Optimization </h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


  </div>

<div class="container">
    
      <div class="text-center"><br/>
        <h2> Reseach Area</h2> <br/>
      </div>
      <div class="owl-carousel">
                       <div class="item">
                           <img src="image/bootstrap.png" class="img-thumbnail" alt="Responsive image">
                       </div>

                       <div class="item">
                           <img src="image/bootstrap.png" class="img-thumbnail" alt="Responsive image">                              
                       </div>
                       <div class="item">
                            <img src="image/bootstrap.png" class="img-thumbnail" alt="Responsive image">                              
                       </div>       
                         
            </div>

    <h4> <br>Description </h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

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
      
        


        </script>


  


</body>
</html>