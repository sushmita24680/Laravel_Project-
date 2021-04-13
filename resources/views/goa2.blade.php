<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goa-booking site</title>
    <script src="https://kit.fontawesome.com/e16db2a88e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css"  href="{{ asset('css/goa2.css') }}"  />
<link rel="stylesheet"  href="{{ asset('css/navigation.css') }}" />

</head>
<body ><nav id="background2">
   <div id="#logo"> 
    <img src="/images/logo1.png"/>
    </div>
           <div id="heading">
        <h3>WELCOME TO</h3>
        <h3><span>GOA BEACH</span> - Tour Packages</h3></div>
  @include('navigation');         
       </nav>
</nav>

  
       <section id="page">
            <section id="sections" >
        <div id="info">
         
        
               <div class="slideshow-container">

    <div >
       <button id="day">7 DAYS / 6 NIGHTS</button>
      
            <div class="mySlides fade">
                
              <div class="numbertext">1 / 6</div>
              <img src="/images/dehi_to_goa.jpg" style="width:100%">
            
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 6</div>
              <img src="/images/parasailing-Goa.jpg" style="width:100%">
              
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 6</div>
                <img src="/images/Baga-Beach-in-goa.jpg" style="width:100%">
               
              </div>
              <div class="mySlides fade">
                <div class="numbertext">4 / 6</div>
                <img src="/images/yoga.jpg" style="width:100%">
                
              </div>
              <div class="mySlides fade">
                <div class="numbertext"> 5 / 6</div>
                <img src="/images/Dudhsagar.jpg" style="width:100%">
                
              </div>
            
            <div class="mySlides fade">
              <div class="numbertext">6 / 6</div>
              <img src="/images/Reis.jpg" style="width:100%">
              
            </div>
            
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <div id="activitylist">
                            <h1> Activities</h1>
                            <div id="xline"></div>
                <ul>
                <li class="texts" onclick="currentSlide(1)"> Car&nbsp;Riding</li> 
                <li class="texts" onclick="currentSlide(2)"> Parasailing</li> 
                <li class="texts" onclick="currentSlide(3)"> Baga&nbsp;Beach</li> 
                <li class="texts" onclick="currentSlide(4)"> Yoga</li> 
                <li class="texts" onclick="currentSlide(5)"> Dudhsagar&nbsp;Waterfall</li> 
                <li class="texts" onclick="currentSlide(6)"> Arjuna&nbsp;Fort</li> 
                </ul>  </div>
            
            </div>
            
         
            
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
              <span class="dot" onclick="currentSlide(4)"></span> 
              <span class="dot" onclick="currentSlide(5)"></span> 
              <span class="dot" onclick="currentSlide(6)"></span> 
            </div>
            
              
              <div id="instruct">
            <h2>Instruction</h2>
            <p>This package is common for all . So, we have kept 
                Biking activity as optional in which vehicle must be arranged by user itself.
                We  will provide guider which will guide and travel along to meet exact destination
                We will also provide meal and necessary accessories required during travelling .
                <br/>Rest of the user will be travelling by van provided by our services .
                User need to reach delhi to experience the tour package.
                And route map is displayed on right .
            </p>
            </div>
              </div>
            </div>
            <div id="mapframe">
              
              <p id="payment">Per person : <del>₹9000/-</del>₹8750/- </p>
          
                <h1>Map</h1>
          <div id="map">  <button id="live"><i class="fas fa-eye">&nbsp;&nbsp;LIVE</button></i>
            <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7571595.050987406!2d71.01501581458923!3d22.08522387230814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!3m2!1d28.7040592!2d77.10249019999999!4m5!1s0x3bbfea19aaaaaaab%3A0x3e9d3e41bfb26cfa!2sGoa%20Beach%20Hotel%2C%20Baga%2C%20Goa%20403516!3m2!1d15.5591116!2d73.756646!5e0!3m2!1sen!2sin!4v1618206324816!5m2!1sen!2sin"  frameborder="0"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           
          </div>
          <br/> <div id="mapdes">
                 <p>  <i class="fas fa-map-marker-alt"></i>
                     &nbsp;&nbsp; Route Map from delhi to Goa.</p>
                </div>
            </div> 
            
        
        

    </section>


<section  id="section2">
    <div id="facilites">
        <h1>Facilites</h1>
        <ul id="faclit">
       <li>Transport&nbsp;<i class="fas fa-shuttle-van"></i></li> <br/>  
        <li>Shopping &nbsp;<i class="fas fa-shopping-cart"> </i> </li>
         <br/><li>Hotel &nbsp;<i class="fas fa-hotel"></li></i> 
         <br/><li>Food &nbsp;<i class="fas fa-utensils"></li></i>
         <br/><li>Covid package &nbsp;<i class="fas fa-head-side-mask"></li></i>
         <br/> <li>Jim &nbsp;<i class="fas fa-dumbbell"></li></i>
         
        </ul>
        
        
    </div>
    <div id="hotels">
        <h1 style="padding: 10px;">Hotel</h1>
        <div id="hotelframe">       
             <div>
            <duba id="one" ><p>1.&nbsp;Hotel&nbsp;&nbsp;&nbsp;&nbsp;<br/> </p></duba>
            <!-- <img src="hotel.jpg"/> -->
        <duba id="two"><p>2.&nbsp;External <br/>view</p></duba>
        <!-- <img src="exterior view.jpg"/> -->
        </div>
        <div>
            <duba id="three"><p>3.&nbsp;Room1<br/><br/></p></duba>
            <!-- <img src="classsic room-bed.jpg"/> -->
            <duba id="four"><p>4.&nbsp;Room2<br/><br/></p></duba>
            <!-- <img src="juniorsuite-bedroom.jpg"/> -->
        </div>
        </div>
    <p style="margin-left:4rem;margin-top: 2rem;"><i class="fas fa-hotel"></i> &nbsp;&nbsp;&nbsp;Picture of hotel and rooms of manali.</p>
    </div>
    <div id="schedule">
        <h1>schedule plan</h1>
        <p class="plan">Day 1: Arrival from Delhi to Goa (13 hrs : max)</p>
        <p class="plan">Day 2: Yoga</p>
        <P class="plan">Day 3: Parasailing</P>
        <p class="plan">Day 4: Arujna Fort</p>
        <p class="plan">Day 5: DudhSagar waterfall</p>
        <p class="plan">Day 6: Boat Sailing</p>
        <p class="plan">Day 7:Preparing to return back to pickup point</p>


    </div>

    
</section>
<a href="/manali-booking"><button id="book">Book NOW</button></a> 


    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          
        }

          </script> 
</body>
</html>