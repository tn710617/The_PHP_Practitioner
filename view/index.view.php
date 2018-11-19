<?php
require_once 'partial/head.php';
require_once 'partial/nav.php';
?>
    <h1>My Tasks</h1>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else: ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>
<?php
require_once 'partial/footer.php';
