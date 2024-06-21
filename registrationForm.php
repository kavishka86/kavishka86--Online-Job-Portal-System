<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href = "registerstyle.css">

<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<br>

<title>registration</title>
</br>

</head>

<header>
        
        <div class="logo">
            <a href="#"><img src="image/logo.jpg" class="log"></a>
            <a href="home.html" class="page-name">Career Journey</a>
            <div class="right">
            <a href="loginPage.php" class="login" >Login</a>
            <a href="registrationForm.php" class="Register" >Register</a>
            <a href=""> <img src="image/p1.jpg" id="prof"></a>
</div>

        </div>
        
    </header>




    <!--navigation bar// -->
    <nav>
        <ul class="navigation-tabs">
            <li><a href="home.html">Home</a></li>
            <li><a href="post_jobs.html">Post Jobs</a></li>
            <li><a href="candidate.php">Candidate</a></li>
            <li><a href="about_us.html">About Us</a></li>
            <li><a href="help.html">Help</a></li>
        </ul>
    </nav>

  
<body>

    <br>
	  <div class="container">
	  
		
	  <h3>Registration</h3>
	 </br>
	
     <div class="formstyle">

<form method="POST" action="register.php" onsubmit="return validateForm(event) && validatePassword(event)">
<br><br>
<center>
Name:
    <br><br>
    <input type="text" name="Name" placeholder="Name" required>
    <br><br>

email:
    <br><br>
    <input type="email" name="email" placeholder="abc@gmail.com" pattern="[a-z0-9.%+-]+@[a-z0-9.-]+\.[a-z]{2,3}"required ></br><br/>

Phone Number:
    <br><br>
    <input type="phone" name="mobile" placeholder="0779692309" pattern="[0-9]{10}"required><br/><br/>	  
    
Password:
    <br><br>
    <input type="password" name="Password" id="password" placeholder="Password" required><br><br>

Repeat Password:
    <br><br>
    <input type="password" name="password_repeat" id="password_repeat"  placeholder="Repeat Password" required><br><br>
    <br><br>

    <input type="submit" value="Register" onclick="showSuccessMessage()">
    
    <center><p>already have an account? <a href="login.php">login now</a></p></center>
</center>
    </form>

</div>
</div>  
<script>
    function validateForm(event) {
        var inputs = document.getElementsByTagName("input");
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].hasAttribute("required") && inputs[i].value === "") {
                alert("Please fill in all the required fields.");
                return false;
            }
        }
        return true;
    }
</script>

<script>
function validatePassword(event) {
    event.preventDefault(); // Prevent form submission
    
    var password = document.getElementById("password").value;
    var passwordRepeat = document.getElementById("password_repeat").value;

    if (password !== passwordRepeat) {
        alert("Passwords do not match.");
        return false;
    } else {
        return true;
    }
}
</script>

<script>
    function showSuccessMessage() {
        if (validateForm(event) && validatePassword(event) ) {
            alert("Thank you for registering. Your registration has been successfully completed.");
            return true;
        }
        return false;
    }
</script>





	<footer>

    <div class="footer-col">

      <h4>Contact CareerJourney</h4>
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
      <h4>Explore CareerJourney</h4>
      
      <h5>Our partners</h5>
      <h5>Our Vision</h5>
    </div>

    <div class="footer-col">
      <h4>About CareerJourney</h4>
      <h5>News</h5>

      <img src="images/fb1.jpg" class="p1">
      <img src="images/ins1.jpg" class="p2">
      <img src="images/tw1.jpg" class="p3"> 

    
  
</footer>
</body>
</html>