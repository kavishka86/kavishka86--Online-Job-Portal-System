<?php
include 'conect.php';

if (isset($_POST['submit'])) 
{
    $title = $_POST['Title'];
    $email = $_POST['Email'];
    $category = $_POST['Category'];
    $description = $_POST['Description'];

    $sql = "INSERT INTO jobd (J_ID, J_title,Email, Catagory, Description) VALUES ('','$title', '$email', '$category', '$description')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('Location: display.php');
    } else {
        echo "Error inserting data: ";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Career Journey</title>
    <link rel="stylesheet" href="kavi.css">
</head>
<!--header-->

<header>
  <div class="logo">
      <a href="#"><img src="image/logo.jpeg" class="log"></a>
      <a href="home.html" class="page-name">Career Journey</a>
      <div class="right">
      <a href="loginPage.php" class="login" >Login</a>
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
      <li><a href="postjob.php">Post Jobs</a></li>
      <li><a href="candidate.php">Candidate</a></li>
      <li><a href="about_us.php">About Us</a></li>
      <li><a href="help.php">Help</a></li>
  </ul>
</nav>
    <br>

     <div class="container">
        <form method="POST" >
            <div class="row">
                <div class="col-25">
                    <label for="title">Job_Title</label>
                </div>
                <div class="col-75">
                    <input type="text" id="title" name="Title">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" id="email" name="Email">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="category">Category</label>
                </div>
                <div class="col-75">
                    <input type="text" id="category" name="Category">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="description">Description</label>
                </div>
                <div class="col-75">
                    <textarea id="description" name="Description" placeholder="Write something.." style="height:200px"></textarea>
                </div>
            </div>

        

         <input type="submit" value="Submit" onclick="showMessage()">


         <script>
        function showMessage() {
            alert("Thank you for Apply. Your Application has been successfully completed.");
        }
        </script>
    
            <br>

            
        </form>
    </div>
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

</body>
</html>