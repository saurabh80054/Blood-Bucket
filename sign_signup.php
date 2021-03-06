<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reg</title>
</head>
<?php 
include 'dbcon.php';

    if(isset($_POST['submit']))
    {
        include 'signup.php';        
    }
    else
    {
        if(isset($_POST['signinbtn']))
        {
            include 'signin.php';            
        }
    }

    include './style/signup.php';
?>

<body id="form" style="background-image: url(./assets/formbg.jpg); background-size: cover;">
    <div class="slide-controls">
        <input type="radio" name="slide" id="signIn" checked>
        <input type="radio" name="slide" id="signUp">
        <label for="signIn" class="slide signIn">SIGN IN</label>
        <label for="signUp" class="slide signUp">SIGN UP</label>
        <div class="slider-tab"></div>
    </div>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <!-- signup form -->
            <form id="signup-form" action="#" method="POST">
                <h1>Create Account</h1><br>
                <input type="text" name="name" required placeholder="Name" />
                <input type="text" name="username" required placeholder="Username" />
                <input type="password" name="password" required placeholder="Password" />
                <input type="password" name="confirm_password" required placeholder="Confirm Password" />


                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <!-- sign in form    -->
            <form id="signin-form" action="#" method="POST">
                <h1>Sign in</h1><br>
                <input type="text" name="susername" placeholder="Username" /><br>
                <input type="password" name="spassword" placeholder="Password" /><br>
                <button type="submit" name="signinbtn">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Already registered? Login below.</p>
                    <button class="ghost" id="signIn" onclick="document.getElementById('signIn').click()">Sign
                        In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>New here ?</h1>
                    <p>Join us with minimal details and save someone's life by donating blood</p>
                    <button class="ghost" id="signUp" onclick="document.getElementById('signUp').click()">Sign
                        Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
    </script>
</body>

</html>