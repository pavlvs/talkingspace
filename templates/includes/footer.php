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
                <a href="topics.php" class="list-group-item active">All Categories</a>
                <?php $categories = getCategories(); ?>
                <?php if ($categories) : ?>
                    <?php foreach ($categories as $category) : ?>
                        <a href="topics.php?category=<?= $category->id ?>" class="list-group-item"><?= $category->name ?></a>
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