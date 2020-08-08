<?php include 'includes/header.php' ?>

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


<?php include 'includes/footer.php' ?>