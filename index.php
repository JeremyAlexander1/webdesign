    <!-- PHP header include -->
    <?php
        include 'includes/header.php';
    ?>
    
    <!-- Navigation -->
    <nav class="topnav" id="myTopnav">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>    
            <a href="index.php" class="active">Home</a>
            <a href="#services">Services</a>
            <a href="#my-work">My Work</a>
            <a href="#about-me">About Me</a>
            <a href="#contact">Contact</a>

        <script>
            document.getElementById("myTopnav").onclick = function(){
         //   var x = document.getElementById("myTopnav");
            if (this.className === "topnav") {
            this.className += " responsive";
            } else {
            this.className = "topnav";
            }
            }
        </script>
        
    </nav>

    <!-- Main content -->
    <main>
        <!-- Scroll back to top Arrow -->
        <a id="back2Top" title="Back to top" href="index.php">&#10148;</a>
        
        <script>
        /*Scroll to top when arrow up clicked BEGIN*/
            $(window).scroll(function() {
            var height = $(window).scrollTop();
            if (height > 100) {
                    $('#back2Top').fadeIn();
            }   
            else {
                $('#back2Top').fadeOut();
            }
            });
            $(document).ready(function() {
            $("#back2Top").click(function(event) {
                event.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
            });
            });
            /*Scroll to top when arrow up clicked END*/
        </script>
        
        <section class="section group" id="services">
            <h2>Services</h2>
            <section class="col span_3_of_12">
                <h3>Custom & Simple to Use Websites</h3>
                <img src="images/networking.jpg" alt="Networking with clients and experts" class="small-heading-img">
                <p>I specialize in designing websites from the scratch. All finished products begin with an idea. My goal is to assist with the planning, designing, and execution aspects of this process.</p>
            </section>
            <section class="col span_3_of_12">
                <h3>Designing for Multiple Devices</h3>
                <img src="images/devices.jpg" alt="Designing for multiple devices" class="small-heading-img">
                <p>It's a fact that over half of the internet's overall traffic comes from mobile devices. I design interfaces that use media queries to create a mobile-first design with progressive enhancement to larger resolutions.</p>
            </section>
            <section class="col span_3_of_12">
                <h3>Content Management Systems</h3>
                <img src="images/cms.jpg" alt="Content management systems" class="small-heading-img">
                <p>Are you seeking a better way to manage content for your site? content management system (CMS) allows you to edit your websites content in a more seamless manner. Example: WordPress.</p>
            </section>
            <section class="col span_3_of_12">
                <h3>Web Optimization and Marketing</h3>
                <img src="images/seo.jpg" alt="Search engine optimization" class="small-heading-img">
                <p>I design websites to be optimized for search engine results. I can also help create and build a social media presence.</p>
            </section>
        </section>
            
        <section class="section group" id="services-continued">
            <section class="col span_4_of_12">
                <h3>Skill Set</h3>    
                <ul>
                    <li>Proficient in front end web development using HTML5, CSS3, LESS, and JavaScript.</li>
                    <li>Ability to implement online marketing agendas, including SEO best practices.</li>
                    <li>Experience writing code for a content management system (CMS) such as WordPress.</li>
                    <li>Optimizing website content and styles for a mobile first design, using progressive enhancement for larger resolutions.</li>
                    <li>Familiarity with Photoshop and image editing programs.</li>
                    <li>Knowledge in PHP programming.</li>
                </ul>
            </section>
            <section class="col span_4_of_12">
                <h3>Objectives</h3>
                <ul>
                    <li>Support department staff to update, maintain, and develop new features for the organizations platform and website.</li>
                    <li>Assist with other research department website activities as necessary.</li>
                    <li>Gain on-hands experience with networking and working with peers within the industry.</li>
                    <li>Add new features, refresh existing designs, and troubleshooting websites.</li>
                    <li>Commitment to deliver high quality work.</li>
                </ul>
            </section>
            <section class="col span_4_of_12">
                <h3>My Goals</h3>
                <ul>
                    <li>Complete an internship by applying my classroom learnings in a real world environment.</li>
                    <li>Network with peers and experts in web development and design communities.</li>                 
                    <li>Work with small businesses, entrepreneurs, and individuals seeking to create an online presence in the form of a website.</li>                    
                </ul>
            </section>
        </section>
        
        <section class="section group" id="my-work">    
            <h2>My Work</h2>
            <section class="col span_6_of_12">
                <h3><a href="http://webdesign.jaretro.com/mock-sites/aja_final_web-site/" target="_blank">Andrew Joseph Alexander</a></h3>
                <a href="http://webdesign.jaretro.com/mock-sites/aja_final_web-site/" target="_blank"><img src="images/mock-site-aja.jpg" alt="Andrew Joseph Alexander's website"></a>
                <p><a href="http://webdesign.jaretro.com/mock-sites/aja_final_web-site/" target="_blank">*Desktop resolution. Click screenshot to visit Andrew Joseph Alexander's website.</a></p>
                <p>Andrew Joseph Alexander works on Video Editing, Cinematography, Music Videos, Short Films, VFX, Highlight Films, Commercials, Cover Art, and Multimedia Videos. I redesigned Andrew's website to be optimized as a mobile-first interface with progressive enhancements for larger resolution devices.</p>
            </section>
            <section class="col span_6_of_12">
               <h3><a href="http://donmaclane.com/" target="_blank">Don MacLane</a></h3>
                <a href="http://donmaclane.com/" target="_blank"><img src="images/client-site-don-maclane.png" alt="Don MacLane website"></a>
                <p><a href="http://donmaclane.com/" target="_blank">*Desktop resolution. Click screenshot to visit Don MacLane's website.</a></p>
                <p>Don MacLane is a Kinetic Sculptor and Luthier From Portland, Oregon. Don was seeking an easy way to update and manage his site without the hassel of learning the details of coding websites. I helped Don MacLane redesign his website using WordPress. Don is now able to manage and maintain his user friendly WordPress website as an administrator.</p>
            </section>
        </section>
        
        <section class="section group" id="my-work-continued"> 
            <section class="col span_6_of_12">
                <h3><a href="http://webdesign.jaretro.com/mock-sites/burrito-masala-web-site/" target="_blank">Burrito Masala</a></h3>
                <a href="http://webdesign.jaretro.com/mock-sites/burrito-masala-web-site/" target="_blank"><img src="images/mock-site-bm.png" alt="Burrito Masala website"></a>
                <p><a href="http://webdesign.jaretro.com/mock-sites/burrito-masala-web-site" target="_blank">*Desktop resolution. Click screenshot to visit Burrito Masala.</a></p>
                <p>Burrito Masala is a fictional food cart located in downtown Portland, Oregon on the corner of SW 3rd and Alder. Burrito Masala specializes in cooking delicious southern Indian (Kerala) and Mexican food. The cart offers options to build burritos or bowls, and you can pick your ingredients. This site was designed to showcase my portfolio of work.</p>
            </section>
            <section class="col span_6_of_12">
               <h3><a href="http://webdesign.jaretro.com/mock-sites/walk-albina-cas285-group-site/" target="_blank">Walk Albina's Black History</a></h3>
                <a href="http://webdesign.jaretro.com/mock-sites/walk-albina-cas285-group-site/" target="_blank"><img src="images/albinas-black-history-walk-2018-cas285-group3.png" alt="Walk Albina's Black History group3 website"></a>
                <p><a href="http://webdesign.jaretro.com/mock-sites/walk-albina-cas285-group-site/" target="_blank">*Desktop resolution. Click screenshot to visit Walk Albina's Black History</a></p>
                <p>Walk Albina's Black History was designed as a group project from CAS 285 - Capstone for Website Development/Design at <a href="https://www.pcc.edu/" target="_blank">PCC</a>. Walk Albina's Black History is a service learning project provided by Dr. Andrea Lowgren's HST 251 students of <a href="https://www.pcc.edu/" target="_blank">PCC</a>.</p>
            </section>
        </section>
        
        <section class="section group" id="about-me">
            <h2>About Jeremy Alexander</h2>
            <section class="col span_6_of_12" id="about-me-paragraph">
                <p>I'm a student at Portland Community College, and I will be graduating by summer of 2018. My degree is in Associate of Applied Science, AAS majoring in Website Development & Design. My goal is to complete work for small businesses, freelance creators, or any individuals seeking to design a clear and concise web presence.</p>  
                <p>When I'm not designing websites, my hobbies include cooking, exercise, watching sports, hiking & enjoying nature, and music production.</p>
                <p>Jeremy Alexander, web designer based in Portland, Oregon.</p>
                <p><a href="assets/resume_jeremy-alexander.pdf" target="_blank">View Jeremy's PDF Resume</a></p>
            </section>  
            <section class="col span_6_of_12">
                <img src="images/jeremy-alexander-headshot-close-up-1.jpg" alt="Jeremy Alexander head shot resized">
            </section>              
        </section>
        <!-- Image carousel -->
            <div class="container">
            <h3>Jeremy's Gallery</h3> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li> 
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>         
            </ol>    

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                
            <div class="item active">
            <img src="images/jeremy-alexander-headshot-1-resize.jpg" alt="Jeremy Alexander Headshot original" style="width:100%;">
            </div>

            <div class="item">
            <img src="images/jeremy-alexander-headshot-4-black-white-resize.jpg" alt="Jeremy Alexander Headshot black and white" style="width:100%;">
            </div>
                    
            <div class="item">
            <img src="images/jeremy-3d-graphic-design-aja.jpg" alt="Jeremy in 3D" style="width:100%;">
            </div>      
                
            <div class="item">
            <img src="images/jeremy-nature-1.png" alt="Jeremy looking at the landscape" style="width:100%;">
            </div>
                
            <div class="item">
            <img src="images/jeremy-nature-4.png" alt="Shadows walking in the Forest" style="width:100%;">
            </div>
                
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
        
    </main>
        
    <?php
        include 'includes/footer.php';    
    ?>