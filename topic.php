<?php include 'includes/header.inc.php' ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">

    <title>Create a topic</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/custom.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/ckeditor/ckeditor.js"></script>


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
                    <li class="active"><a href="index.php">Home</a></li>
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
                        <h1 class="pull-left">How did you learn CSS and HtML</h1>
                        <h4 class="pull-right">A simple PHP forum engine.</h4>
                        <div class="clearfix"></div>
                        <hr>
                        <ul id="topics">
                            <li id="main-topic" class="topic">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="user-info">
                                            <img src="assets/images/gravatar.jpg" alt="" class="avatar pull-left"></div>
                                        <ul>
                                            <li><strong>Py Thon Sucks</strong></li>
                                            <li>11 Posts</li>
                                            <li><a href="#">View Topics</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="topic-content pull-right">
                                            <h3><a href="topic.php">How did you learn CSS and HtML</a></h3>
                                            <div class="topic-info"><a href="category.php">Development</a> >> <a href="profile.php">Py Thonsucks</a> >> Posted on: June 12, 2014 <span class="badge pull-right">3</span></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="topic">
                                <div class="row">
                                    <div class="col-md-2"><img src="assets/images/gravatar.jpg" alt="" class="avatar pull-left"></div>
                                    <div class="col-md-10">
                                        <div class="topic-content pull-right">
                                            <h3><a href="topic.php">How to create new page dynamically in php</a></h3>
                                            <div class="topic-info"><a href="category.php">Development</a> >> <a href="profile.php">Matt Noruby</a> >> Posted on: June 12, 2014 <span class="badge pull-right">3</span></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="topic">
                                <div class="row">
                                    <div class="col-md-2"><img src="assets/images/gravatar.jpg" alt="" class="avatar pull-left"></div>
                                    <div class="col-md-10">
                                        <div class="topic-content pull-right">
                                            <h3><a href="topic.php">Google Panda - Who's affected?</a></h3>
                                            <div class="topic-info"><a href="category.php">Search Engines</a> >> <a href="profile.php">Joe Javablows</a> >> Posted on: June 12, 2014 <span class="badge pull-right">3</span></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="topic">
                                <div class="row">
                                    <div class="col-md-2"><img src="assets/images/gravatar.jpg" alt="" class="avatar pull-left"></div>
                                    <div class="col-md-10">
                                        <div class="topic-content pull-right">
                                            <h3><a href="topic.php">Is Css3 is not working in IE8 and IE9?</a> </h3>
                                            <div class="topic-info"><a href="category.php">Search Engines</a> >> <a href="profile.php">Joe Javablows</a> >> Posted on: June 12, 2014 <span class="badge pull-right">3</span>
                                            </div>
                                        </div>
                                    </div>
                            </li>
                            <li class="topic">
                                <div class="row">
                                    <div class="col-md-2"><img src="assets/images/gravatar.jpg" alt="" class="avatar pull-left"></div>
                                    <div class="col-md-10">
                                        <div class="topic-content pull-right">
                                            <h3><a href="topic.php">Best Web Application Frameworks</a></h3>
                                            <div class="topic-info"><a href="category.php">Design</a> >> <a href="profile.php">Joe Javablows</a> >> Posted on: June 12, 2014 <span class="badge pull-right">3</span></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h3>Reply To Topic</h3>
                        <form action="" method="post">
                            <div class="form-group">
                                <textarea name="reply" id="reply" cols="80" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('reply');
                                </script>
                            </div>
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
</body>

</html>

<?php include 'includes/footer.inc.php' ?>