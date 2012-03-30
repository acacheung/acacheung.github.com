<?php include("header.php"); ?>

<div id="container">
  
      <!--  Outer wrapper for presentation only, this can be anything you like -->
      <div id="banner">
        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li><img src="img/soccer.jpg" title="Home of Newton Youth Soccer"></li>
          <li><img src="img/corn.jpg" title="The Farmers' Market"></li>
          <li><img src="img/winter.jpg" title="Great Place for Dog-Walking"></li>
        </ul>
        <!-- end Basic jQuery Slider -->
      </div>
      <!-- End outer wrapper -->
      
    </div>
  
    <!-- Load jQuery and the plug-in -->
    <script src="js/libs/jquery-1.6.2.min.js"></script>
    <script src="js/basic-jquery-slider.js"></script>
    
    <!--  Attach the plug-in to the slider parent element and adjust the settings as required -->
    <script>
      $(document).ready(function() {
        
        $('#banner').bjqs({
          'animation' : 'slide',
          'width' : 760,
          'height' : 350
        });
        
      });
    </script>


<section id="retention">
	<article id="blog">
	<h1>What's New?</h1>
	<p>Hoodie organic irure, gentrify four loko marfa whatever tempor tattooed. Whatever before they sold out scenester sriracha stumptown voluptate occupy non narwhal seitan, photo booth freegan leggings post-ironic.</p>
	<p class="post-time">Posted February 14, 2012 by CSPark</p>
	
	<p>Vice aesthetic cliche forage photo booth umami. eytar freegan wayfarers umami in messenger bag delectus. Direct trade excepteur in pop-up aute terry richardson.</p>
	<p class="post-time">Posted February 26, 2012 by CSPark</p>
	
	<p>Vice aesthetic cliche forage photo booth umami. eytar freegan wayfarers umami in messenger bag delectus. Direct trade excepteur in pop-up aute terry richardson.</p>
	<p class="post-time">Posted February 26, 2012 by CSPark</p>	
	
	</article>
	
	<article id="today">
	
	<h1>Coming up this week</h1>
	<ul id="this-week">
		<li>Feb 28 (Tue): 3 PM Dog Park Meetup</li>
		<li>Mar 01 (Thu): 3 PM Newton Boys Youth Soccer practice</li>		
	</ul>
	<p class="post-time"><a href="#" class="inquiry">List your events here!</a></p>	
	
	<h1>Support Cold Spring</h1>
	<p>Volunteer and help clean up the park loko marfa whatever tempor tattooed. Whatever before they sold out scenester sriracha stumptown voluptate occupy non narwhal seitan, photo booth freegan leggings post-ironic.</p>
	<p class="post-time">Posted February 14, 2012 by CSPark</p>

	<a href="#" class="btn"><span>Donate here!</span></a>
	
	</article> 
	
</section>

<?php include("footer.php"); ?>




      

   
