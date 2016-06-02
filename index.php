<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("html_errors", 1);

include("inc/header.php");
?>
  
	<div class="home blocks row">
    <h1 class="home_text white"><a name="home"></a>Brendan Jackson</h1>
	
		<br><br>
		<h3 class="white">To continuously learn and grow in a field that is always changing. To deliver a product that customers can enjoy & use with ease, our company can showcase for future prospects, and that I can be proud of.</h3>
    
    
    
    <a href="https://github.com/BrendanJackson" class="contact-button btn btn-lg btn-default">GitHub</a>
    
    <a href="https://www.linkedin.com/in/brendan-jackson-5395017a" class="contact-button btn btn-lg btn-default ">LinkedIn</a>

    <a href="https://www.freecodecamp.com/brendanjackson" class="contact-button btn btn-lg btn-default">Free Code Camp</a>
   
    <a href="https://teamtreehouse.com/brendanjackson" class="contact-button btn btn-lg btn-default">Team Treehouse</a>
			
	</div><!--/home-->

	<div class="about blocks row"> <!-- -->
        
        <div class="about-layout1 col-lg-7">
            <p class="about-head white"><a name="about"></a>Brendan Jackson</p>
                <p class="about-text white">
                I'm a freelance web developer currently living in Lexington, KY. <br>
                Skills: HTML, CSS, Javascript, jQuery&amp;jQueryUI, Bootstrap, GitHub, Drupal, Wordpress, PHP(working on laravel) & SQL <br>
                Proficiency:Microsoft, Linux(fedora & Ubuntu), & Mac Operating systems and programs.
            </p>
        </div>	<!--about-layout1-->
        
        <div class="about-layout2 remove col-lg-5"> 

            <div class="circular remove"></div>

        </div> <!-- about-layout2 -->
             
	</div><!--/about-->

	<div id="portfolio" class="row"> 	<!-- was container -->

     <!-- <div class="portfolio-content  "><!--was container"-->

            <div class="portfolio-header">
                <div class="col-lg-12 text-center"> <!--  -->
                    <h2 class="white">Portfolio pieces incoming!</h2>
                    <a name="portfolio"><a/>
                        <h3  class="  white">Here is some of my work</h3>
                </div>
            </div>

            <div class="portfolio-links"><!-- was row -->
                <div class="col-md-4 col-sm-6 portfolio-item"><!-- -->
                    <a href="/links/cmm-gallery/index.html" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">

                            </div>
                        </div>
                        <img src="http://s19.postimg.org/yqh15fs2r/Screenshot_from_2016_04_03_14_54_23.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption white">
                        <h4>Candy Mountain Music Gallery demo</h4>
                        <p class="text-muted white">jQuery & Blueprint</p>
                    </div>
                </div>
                <!-- End of Portfolio img1 -->

                <!-- Portfolio img2 -->
                <div class="col-md-4 col-sm-6 portfolio-item portfolio2">
                    <a href="links/focus/index.html" class="portfolio-link" target="_blank" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">

                            </div>
                        </div>
                        <img src="http://s19.postimg.org/rqbvf00rn/Screenshot_from_2016_04_03_18_36_57.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption white">
                        <h4>Focus(To Do List)</h4>
                        <p id="" class="text-muted white">Bootstrap, jQuery, jQueryUI</p>
                    </div>
                </div>
                <!-- End of Portfolio img2 -->

                <!-- Portfolio img3 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="/links/jquery-playground/index.html" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">

                            </div>
                        </div>
                        <img src="http://s19.postimg.org/hck8d8usj/Screenshot_from_2016_04_03_18_51_10.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption white">
                        <h4>jQuery Playground</h4>
                        <p id="" class="text-muted white">jQuery and bootstrap (exploring CSS commands with JS)</p>
                    </div>
                </div>
                <!-- End of Portfolio img3 -->

                <!-- Portfolio img4 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="/links/coding-journal/index.html" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">

                            </div>
                        </div>
                        <img src="http://s19.postimg.org/ro16jnbvn/Screenshot_from_2016_04_03_18_58_41.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption white">
                        <h4>Coding journal</h4>
                        <p id="" class="text-muted white">Bootstrap +more </p>
                    </div>
                </div>
                <!-- End of Portfolio img4 -->

                <!-- Portfolio img5 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="/links/rock-paper-scissors/index.html" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">

                            </div>
                        </div>
                        <img src="http://s19.postimg.org/awvzij4yr/Screenshot_from_2016_04_17_20_43_40.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption white">
                        <h4>Rock Paper Scissors </h4>
                        <p id="" class="text-muted white">Vanilla JS</p>
                    </div>
                </div>
                <!-- End of Portfolio img5 -->

                <!-- Portfolio img6 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="/links/ghenghis-khan/index.html" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">

                            </div>
                        </div>
                        <img src="http://s19.postimg.org/hdk3zywgz/Screenshot_from_2016_04_11_22_25_26.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption white">
                        <h4>Genghis Khan Tribute</h4>
                        <p id="" class="text-muted white">HTML & CSS</p>
                    </div>
                </div>
                <!-- End of Portfolio img6 -->
            </div>

        <!--</div> -->

    </div><!--/portfolio-->

	<div id="contact" class="blocks row">
	
      <div class="col-lg-8 col-xs-8">
        <div class="email">
          <a name="contact"></a><p class="contact-text white">Contact me at:<br>bajackson859@gmail.com</p>
        </div>
      </div>
      
      <div class="contact-buttons col-lg-4">
     
      <ul class="contact_buttons">
        <li class=""><a href="https://github.com/BrendanJackson" class="smaller github btn btn-default btn-lg" >GitHub</a></li>
        <li><a href="https://www.linkedin.com/in/brendan-jackson-5395017a?trk=nav_responsive_tab_profile_pic" class="smaller linkedin btn btn-default btn-lg" >Linkedin</a></li>
      	<li><a href="https://www.freecodecamp.com/brendanjackson" class="smaller freecodecamp btn btn-default btn-lg">Free Code Camp</a></li>
        <li><a href="https://teamtreehouse.com/brendanjackson" class="smaller teamtreehouse btn btn-default btn-lg" >Team Tree House</a></li>
      </ul>
  	
      </div>

    </div>


<?php

include("inc/footer.php");

?>
  
