<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div class="register-photo">
    <div class="form-container">
        <div class="image-holder"></div>
        <form method="post" action="connectivity.php" id="register_form">
            <h2 class="text-center"><strong>Create</strong> an account.</h2>
            <div class="form-group">
                <input id="first_name" class="form-control" type="text" name="first_name" placeholder="First Name"
                       required>
            </div>
            <div class="form-group">
                <input id="last_name" class="form-control" type="text" name="last_name" placeholder="Last Name"
                       required>
            </div>
            <div class="form-group">
                <input id="email" class="form-control" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input id="password" class="form-control" type="password" name="password" placeholder="Password"
                       required>
            </div>
            <div class="form-group">
                <input id="repeat_password" class="form-control" type="password" name="password-repeat"
                       placeholder="Password (repeat)" required>
            </div>
            <div class="form-group">
                <div id="captcha" class="g-recaptcha" data-sitekey="6LfIKMMUAAAAAE8pvOe6vIuvkR5elVX_sjJ0D0Id"></div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
            </div>
            <a href="#" class="already">You already have an account? Login here.</a>
        </form>
    </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    $(document).ready(function () {
        $('#register_form').submit(function (e) {
            const first_name = $('#first_name').val();
            const last_name = $('#last_name').val();
            const email = $('#email').val();
            const password = $('#password').val();
            const repeat_password = $('#repeat_password').val();

            $(".error").remove();

            if (first_name.length < 1) {
                $('#first_name').after('<span class="error">This field is required</span>');
            }
            if (last_name.length < 1) {
                $('#last_name').after('<span class="error">This field is required</span>');
            }
            if (email.length < 1) {
                $('#email').after('<span class="error">This field is required</span>');
            } else {
                var regEx = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
                var validEmail = regEx.test(email);
                if (!validEmail) {
                    $('#email').after('<span class="error">Enter a valid email</span>');
                }
            }
            if (password.length < 8) {
                $('#password').after('<span class="error">Password must be at least 8 characters long</span>');
            }
            if (password !== repeat_password) {
                $('#repeat_password').after('<span class="error">Password must match</span>');
            }

            if(grecaptcha.getResponse() === "") {
                e.preventDefault();
                $('#captcha').after('<span class="error">Invalid Captcha</span>');
            }
        });
    });
</script>

</html>