<!doctype>
<html>
<head>
  <link rel="stylesheet" href="help.css"> </head>


<!--header-->

<header>
  <div class="logo">
      <a href="#"><img src="image/logo.jpeg" class="log"></a>
      <a href="home.html" class="page-name">Career Journey</a>
      <div class="right">
      <a href="" class="login" >Login</a>
      <a href="" class="Register" >Register</a>
      <a href=""> <img src="image/p4.jpg" id="prof"></a>
</div>

  </div>
  
</header>
     
<body>

<!--navigation bar// -->
<nav>
  <ul class="navigation-tabs">
      <li><a href="home.html">Home</a></li>
      <li><a href="post_jobs.html">Post Jobs</a></li>
      <li><a href="candidate.php">Candidate</a></li>
      <li><a href="aboutUs.html">About Us</a></li>
      <li><a href="help.php">Help</a></li>
  </ul>
</nav>

<div class="pic"> 
<center><h1><br><br>Hi! Can We Help You Today?</h1></center>
    <center><div class="search">
	<button type="submit"><img src="image/search.png"></button>
	<input type="text" placeholder="Search...">
    </div></center>

<center><div class="help">
   <img src="image/w1.webp">
   </div></center>

  <main>
    <br>
    <h2>FAQ</h2>

    <section1>
      <h3>How do I create an account?</h3>
      <p>To create an account, click on the "Sign Up" button located on the homepage. Fill in the required information and follow the instructions to complete the registration process.</p>
    </section1>

    <section2>
      <h3>How do I apply for a job?</h3>
      <p>To apply for a job, first, make sure you are logged into your account. Then, navigate to the job listing and click on the "Apply jobs" button. Fill in the required details and submit your application.</p>
    </section2>

    <section3>
      <h3>How can I edit my profile?</h3>
      <p>To edit your profile, log in to your account and go to the "Profile" section. Click on the "Edit Profile" button and make the necessary changes. Don't forget to save your changes before leaving the page.</p>
    </section3>
  </main>
  
  </div>

  <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1/ 3</div>
    <img src="image/s1.jpeg"  class="s1">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="image/s2.jpeg" class="s2" >
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="image/s3.png" class="s3" >
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
  
 <script>
 let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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

  <!--footer-->

  <footer>
    <div class="footer-col">
      <h3>Contact CareerJourney</h3>
      <h5>+94472254195</h5>
      <h5>Fax:+94472254195</h5>
      <h5>E-mail:careerjourney</h5>
      <h5>Marketing Services</h5>

    </div>
    <div class="footer-col">
      <br>
      <br>
      

      <h5>No 42,<br>
          Nawam Road,<br>
          Colombo 04,<br>
          Sri Lanka<br></h5>
      
    </div>
    <div class="footer-col">
      <h3>Explora CareerJourney</h3>
      
      <h5>Our partners</h5>
      <h5>Our Vision</h5>
    </div>
    <div class="footer-col">
      <h3>About CareerJourney</h3>
      <h5>News</h5>

      <img src="image/p1.jpeg" class="p1">
      <img src="image/p2.jpeg" class="p2">
      <img src="image/p3.jpeg" class="p3"> 

    
  
</footer>

</body>
</html>

</html>