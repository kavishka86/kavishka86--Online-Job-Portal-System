



<!DOCTYPE html>
<html>
<head>
    <title>Career Journey</title>
<link rel="stylesheet" href="style.css">
    
    
</head>

<body>


    <header>
        <div class="logo">
            <a href="#"><img src="logo.jpg" id="log"></a>
            <a href="home.html" class="page-name">Career Journey</a>
            <div class="right">
            <a href="" class="login" >Login</a>
            <a href="registration.php" class="Register" >Register</a>
            <a href="new2.php"> <img src="user.jpg" id="prof"></a>


        </div>
        
    </header>




    <!--navigation bar// -->
    <nav>
        <ul class="navigation-tabs">
            <li><a href="">Home</a></li>
            <li><a href="">Post Jobs</a></li>
            <li><a href="">Candidate</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Help</a></li>
        </ul>
    </nav>





    
   <h1>Your Profile</h1>
     

  

   <div class="form">
    <form method="POST" action="update.php" onsubmit="return validateForm(event)">
        <br><br>
        <center>
            
            Name:
            <br><br>
            <input type="text" name="update_name" value="<?php echo isset($name) ? $name : ''; ?>">
            <br><br>

            email:
            <br><br>
            <input type="email" name="update_email" value="<?php echo isset($email) ? $email : ''; ?>"
                   pattern="[a-z0-9.%+-]+@[a-z0-9.-]+\.[a-z]{2,3}"><br><br/>

            Phone Number:
            <br><br>
            <input type="phone" name="update_mobile" value="<?php echo isset($mobile) ? $mobile : ''; ?>"
                   pattern="[0-9]{10}"><br><br/>

            Password:
            <br><br>
            <input type="password" name="update_password" id="password"><br><br>

            Repeat Password:
            <br><br>
            <input type="password" name="password_repeat" id="password_repeat"><br><br>
            <br><br>

            <input type="submit" value="Update" name="update_profile" ><br><br><br>

            
        </center>
    </form>
   </div>



   <script>
    function validateForm(event) {
        // Get form inputs
        var name = document.getElementsByName('update_name')[0].value;
        var email = document.getElementsByName('update_email')[0].value;
        var mobile = document.getElementsByName('update_mobile')[0].value;
        var password = document.getElementById('password').value;
        var passwordRepeat = document.getElementById('password_repeat').value;

        // Validate name (required)
        if (name.trim() === '') {
            alert('Please enter your name.');
            event.preventDefault();
            return false;
        }

        // Validate email (required and valid format)
        var emailRegex = /^[a-z0-9.%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
        if (email.trim() === '' || !emailRegex.test(email)) {
            alert('Please enter a valid email address.');
            event.preventDefault();
            return false;
        }

        // Validate phone number (required and 10 digits)
        var phoneRegex = /^[0-9]{10}$/;
        if (mobile.trim() === '' || !phoneRegex.test(mobile)) {
            alert('Please enter a valid 10-digit phone number.');
            event.preventDefault();
            return false;
        }

        // Validate password (required and minimum length of 8 characters)
        if (password.trim() === '' || password.length < 8) {
            alert('Please enter a password with at least 8 characters.');
            event.preventDefault();
            return false;
        }

        // Validate password repeat (must match the password)
        if (password !== passwordRepeat) {
            alert('Password and Repeat Password do not match.');
            event.preventDefault();
            return false;
        }

        // All validations passed
        return true;
    }
</script>






</body>
</html>
