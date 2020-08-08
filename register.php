<?php include 'includes/header.inc.php' ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/custom.css" rel="stylesheet">


</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">TalkingSpace</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="register.php">Create An Account</a></li>
                    <li><a href="create.php">Create Topic</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="main-col">
                    <div class="block">
                        <h1 class="pull-left">Create an account</h1>
                        <h4 class="pull-right">A simple PHP forum engine.</h4>
                        <div class="clearfix"></div>
                        <hr>
                        <form enctype="multipart/form-data" method="post" action="register.php">
                            <div class="form-group">
                                <label>Name*</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label>Email Address*</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label>Choose Username*</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter a username">
                            </div>
                            <div class="form-group">
                                <label for="">Password*</label>
                                <input type="password" class="form-control" name="password1" placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password*</label>
                                <input type="password" class="form-control" name="password2" placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <label>Upload Avatar</label>
                                <input type="file" name="avatar">
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label for="">About Me</label>
                                <textarea name="about" id="about" cols="80" rows="6" class="form-control" placeholder="Tell us about yourself (Optional)"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default" name="register">Register</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="block">
                        <h3>Login Form</h3>
                        <form>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="block">
                        <h3>Categories</h3>
                        <div class="list-group">
                            <a href="" class="list-group-item active">All Topics<span class="badge pull-right">14</span></a>
                            <a href="" class="list-group-item">Design<span class="badge pull-right">4</span></a>
                            <a href="" class="list-group-item">Development<span class="badge pull-right">9</span></a>
                            <a href="" class="list-group-item">Business & Marketing<span class="badge pull-right">12</span></a>
                            <a href="" class="list-group-item">Search Engines<span class="badge pull-right">7</span></a>
                            <a href="" class="list-group-item">Cloud Hosting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="assets/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>

<?php include 'includes/footer.inc.php' ?>