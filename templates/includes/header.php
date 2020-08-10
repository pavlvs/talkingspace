<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">

    <title>Talking Space</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= BASE_URI ?>templates/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= BASE_URI ?>templates/assets/css/custom.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="<?= BASE_URI ?>templates/assets/js/bootstrap.js"></script>
    <script src="<?= BASE_URI ?>templates/assets/js/ckeditor/ckeditor.js"></script>


</head>

<body>
    <?php
    $title = $title ?? SITE_TITLE;
    ?>

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
                        <h1 class="pull-left"><?= $title ?></h1>
                        <h4 class="pull-right">A simple PHP forum engine.</h4>
                        <div class="clearfix"></div>
                        <hr>
                        <?php displayMessage(); ?>