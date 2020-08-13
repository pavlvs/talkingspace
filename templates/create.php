<?php include 'includes/header.php' ?>
<form action="create.php" method="post">
    <div class="form-group">
        <label>Topic Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter a title for the topic">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category" class="form-control">
            <?php if ($categories) : ?>
                <option value="0" selected disabled>Select a category</option>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category->id ?>"><?= $category->name ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
    </div>
    <div class="form-group">
        <label for=""></label>
        <textarea name="body" id="body" cols="80" rows="10" class="form-control"></textarea>
    </div>
    <script>
        CKEDITOR.replace('body');
    </script>
    <button type="submit" class="btn btn-default" name="doCreate">Add Topic</button>
</form>

<?php include 'includes/footer.php' ?>