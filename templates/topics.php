<?php include 'includes/header.php'; ?>
<ul id="topics">
    <?php if ($topics) : ?>
        <?php foreach ($topics as $topic) : ?>
            <li class="topic">
                <div class="row">
                    <div class="col-md-2">
                        <img class="avatar pull-left" src="<?= BASE_URI ?>templates/assets/images/<?= $topic->avatar ?>" />
                    </div>
                    <div class="col-md-10">
                        <div class="topic-content pull-right">
                            <h3><a href="topic.php?id=<?= $topic->id ?>"><?= $topic->title ?></a></h3>
                            <div class="topic-info">
                                <a href="topics.php?category=<?= urlFormat($topic->category_id) ?>">
                                    <?= $topic->category ?>
                                </a> >>
                                <a href="topics.php?user=<?= $topic->user_id ?>">
                                    <?= $topic->username ?>
                                </a> >> Posted on:
                                <?= formatDate($topic->create_date) ?>
                                <span class="badge pull-right">
                                    <?= replyCount($topic->id) ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    <?php else : ?>
        <p>There are no topics yet.</p>
    <?php endif; ?>
</ul>

<h3>Forum Statistics</h3>
<ul>
    <li>Total Number of Users: <strong>52</strong></li>
    <li>Total Number of Topics: <strong>17</strong></li>
    <li>Total Number of Categories: <strong>6</strong></li>
</ul>
<?php include 'includes/footer.php'; ?>