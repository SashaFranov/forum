<div class="site-index">
    <?php foreach ($Subsection as $Onesubsection): ?>
        <div><a href="/site/topic?subsection_id=<?= $Onesubsection-> id ?>"> <?= $Onesubsection->name ?> </a></div>
    <?php endforeach; ?>
</div>
