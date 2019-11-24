<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div>
    <nav class="navbar navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="index.php">HeadCounter</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="contact_us.php">Contact Us</a>
                    </li>
                </ul>
            </div>
    </nav>
</div>
<div class="contact-clean">
    <form method="post">
        <h2 class="text-center">Contact us</h2>
        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
        <div class="form-group"><input class="form-control" type="email" name="email"
                                       placeholder="Email">
        </div>
        <div class="form-group"><textarea class="form-control" rows="14" name="message"
                                          placeholder="Message"></textarea></div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">send</button>
        </div>
    </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>