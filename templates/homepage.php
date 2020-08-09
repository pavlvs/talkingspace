<?php include 'includes/header.php' ?>
<?php if ($topics) : ?>
    <ul id="topics">
        <?php foreach ($topics as $topic) : ?>
            <li class="topic">
                <div class="row">
                    <div class="col-md-2">
                        <img src="<?= BASE_URI ?>templates/assets/images/<?= $topic->avatar ?>" alt="" class="avatar pull-left">
                    </div>
                    <div class="col-md-10">
                        <div class="topic-content pull-right">
                            <h3><a href="topic.php"><?= $topic->title ?></a></h3>
                            <div class="topic-info">
                                <a href="topics.php?category=<?= urlFormat($topic->category_id) ?>">
                                    <?= $topic->category ?>
                                </a> >>
                                <a href="topics.php?user=<?= urlFormat($topic->user_id) ?>">
                                    <?= $topic->username ?>
                                </a>
                                >> Posted on: <?= formatDate($topic->create_date) ?>
                                <span class="badge pull-right"><?= replyCount($topic->id) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>There are no topics yet.</p>
<?php endif; ?>
<h3>Forum Statistics</h3>
<ul>
    <li>Total Number of Users: <strong><?= $totalUsers ?></strong></li>
    <li>Total Number of Topics: <strong><?= $totalTopics ?></strong></li>
    <li>Total Number of Categories: <strong><?= $totalCategories ?></strong></li>
</ul>
<?php include 'includes/footer.php' ?>