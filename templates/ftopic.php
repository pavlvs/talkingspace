<?php include 'includes/header.php' ?>
<ul id="topics">
    <li id="main-topic" class="topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img src="<?= BASE_URI ?>templates/assets/images/<?= $topic->avatar ?>" alt="" class="avatar pull-left"></div>
                <ul>
                    <li><strong><?= $topic->username ?></strong></li>
                    <li><?= userPostCount($userId) ?> <?= userPostCount($userId) !== 1 ? " Posts" : " Post" ?></li>
                    <li><a href="topics.php?user=<?= $topic->userId ?>">View Topics</a></li>
                </ul>
            </div>
            <div class="col-md-10">
                <div class="topic-content pull-right">
                    <h3><?= $topic->title ?></h3>
                    <div class="topic-info">
                        <a href="category.php">
                            <?= $topic->category ?>
                        </a>
                        >> Posted on: <?= formatDate($topic->create_date) ?>
                        <span class="badge pull-right"><?= $totalReplies ?></span>
                    </div>
                    <div class="topic-body">
                        <p><?= $topic->body ?></p>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <?php if ($replies) : ?>
        <?php foreach ($replies as $reply) : ?>
            <li class="topic">
                <div class="row">
                    <div class="col-md-2">
                        <div class="user-info">
                            <img src="<?= BASE_URI ?>templates/assets/images/<?= $reply->avatar ?>" alt="" class="avatar pull-left"></div>
                        <ul>
                            <li><strong><?= $reply->username ?></strong></li>
                            <li><?= userPostCount($userId) ?> <?= userPostCount($userId) !== 1 ? " Posts" : " Post" ?></li>
                            <li><a href="topics.php?user=<?= $reply->user_id ?>">View Topics</a></li>
                        </ul>
                    </div>
                    <div class="col-md-10">
                        <div class="topic-content pull-right">
                            <div class="topic-info">
                                >> Posted on: <?= formatDate($reply->create_date) ?>
                                <span class="badge pull-right"><?= $totalReplies ?></span>
                            </div>
                            <div class="topic-body">
                                <p><?= $reply->body ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>

    <?php else : ?>
        <p>There are no replies yet.</p>
    <?php endif; ?>

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