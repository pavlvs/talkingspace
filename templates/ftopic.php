<?php include 'includes/header.php' ?>
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
<?php include 'includes/footer.php' ?>