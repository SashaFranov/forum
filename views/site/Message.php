<div class="site-index">
    <?php foreach ($Message as $Onemessage): ?>
        <div><?= $Onemessage->content ?> </div>
        <div><?= $Onemessage->timestamp ?> </div>
        <div><?= $Onemessage->user->name ?> </div>
    <?php endforeach; ?>
</div>
