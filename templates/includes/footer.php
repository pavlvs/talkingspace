</div>
</div>
</div>
<div class="col-md-4">
    <div class="sidebar">
        <div class="block">
            <?php if (!isLoggedIn()) : // if user is not logged in show login form
            ?>
                <h3>Login Form</h3>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>

                    <button type="submit" name="doLogin" class="btn btn-primary">Login</button>
                    <a href="register.php" class="btn btn-secondary">Create Account</a>
                </form>
            <?php else : // if user is logged in show logout button
            ?>
                <div>
                    <p>Welcome <?= $_SESSION['username'] ?></p>
                </div>
                <form action="logout.php" method="post">
                    <button type="submit" name="doLogout" class="btn btn-primary">Logout</button>
                </form>
            <?php endif; ?>
        </div>
        <div class="block">
            <h3>Categories</h3>
            <div class="list-group">
                <a href="topics.php" class="list-group-item <?= isset($_GET['category']) ? '' : ' active' ?>">All Categories</a>
                <?php $categories = getCategories(); ?>
                <?php if ($categories) : ?>
                    <?php foreach ($categories as $category) : ?>
                        <?php if (isActiveCategory($category->id)) : ?>
                            <a href="topics.php?category=<?= $category->id ?>" class="list-group-item active"><?= $category->name ?></a>
                        <?php else : ?>
                            <a href="topics.php?category=<?= $category->id ?>" class="list-group-item"><?= $category->name ?></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>There are no categories yet.</p>
                <?php endif; ?>
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