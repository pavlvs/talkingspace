<?php include 'includes/header.php' ?>
<form>
    <div class="form-group">
        <label>Topic Title</label>
        <input type="text" class="form-control" name="topic_title" placeholder="Enter a title for the topic">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control">
            <option>Design</option>
            <option>Development</option>
            <option>Business & Marketing</option>
            <option>Search Engines</option>
            <option>Cloud Hosting</option>
        </select>
    </div>
    <div class="form-group"><label for=""></label><textarea name="topic" id="topic" cols="80" rows="10" class="form-control"></textarea></div>
    <script>
        CKEDITOR.replace('topic');
    </script>
    <button type="submit" class="btn btn-default name=" submit">Submit Topic</button>
</form>

<?php include 'includes/footer.php' ?>