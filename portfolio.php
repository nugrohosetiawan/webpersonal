<!DOCTYPE>
<html>
<head>
	<?php include("include/header.php");?>
	<title></title>
</head>
<body>
	<?php include("include/navigation.php");?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
    <div class="portfolioFilter clearfix">
      <a href="#" data-filter="*" class="current">All Categories</a>
      <a href="#" data-filter=".webTemplates">Web Templates</a>
      <a href="#" data-filter=".logos">Logos</a>
      <a href="#" data-filter=".drawings">Drawings</a>
      <a href="#" data-filter=".ui">UI Elements</a>
    </div>
      </div>
    <div class="portfolioContainer">

      <div class="webTemplates objects">
        <img src="image/ajax.jpg" alt="image">
      </div>

      <div class="drawings places">
        <img src="image/ajax.jpg" alt="image">
      </div>

      <div class="webTemplates food">
        <img src="image/ajax.jpg

      <div class="logos drawings">
        <img src="https://mir-s3-cdn-cf.behance.net/projects/202/be4b9728308865.55b92edb950fc.jpg" alt="image">
      </div>

      <div class="webTemplates">
        <img src="https://mir-s3-cdn-cf.behance.net/projects/202/12963199.548365055868a.png" alt="image">
      </div>

      <div class="ui">
        <img src="https://mir-s3-cdn-cf.behance.net/projects/202/20342607.5434c04b49254.png" alt="image">
      </div>

      <div class="drawings">
        <img src="https://mir-s3-cdn-cf.behance.net/projects/202/b11bbb26474383.555f91fd42584.jpg" alt="image">
      </div>

      <div class="webTemplates">
        <img src="https://mir-s3-cdn-cf.behance.net/projects/202/14385875.548573dae7a09.jpg" alt="image">
      </div>

      <div class="drawings">
        <img src="https://mir-s3-cdn-cf.behance.net/projects/202/14569777.5485b3876a1b9.png" alt="image">
      </div>
      <div class="logos">
        <img src=" https://mir-s3-cdn-cf.behance.net/projects/202/1d854a24500155.5505cccd057a4.jpg" alt="image">
      </div>
      <div class="ui">
        <img src="https://mir-s3-cdn-cf.behance.net/projects/202/f9b95b26406487.555cc1fded76f.jpg" alt="image">
      </div>
      
      <div class="logos">
        <img src="https://mir-s3-cdn-cf.behance.net/projects/202/181a7b35469661.Y3JvcCw3NjUsNTk5LDY3LDA.png" alt="image">
      </div>
      
     
    </div>
  </div>
</div>
<script type="text/javascript">
	$(window).load(function(){
    var $container = $('.portfolioContainer');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
    $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
});


</script>

</body>
</html>