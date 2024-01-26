<div class="site-index">
    <?php foreach ($Topic as $Onetopic): ?>
        <div><a href="/site/message?topic_id=<?= $Onetopic-> id ?>"> <?= $Onetopic->name ?> </a></div>
    <?php endforeach; ?>
</div>