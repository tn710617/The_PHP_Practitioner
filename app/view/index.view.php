<?php
require_once 'partial/head.php';
require_once 'partial/nav.php';
?>
<?php foreach($users as $user): ?>
<li>
    <?= $user->name ?>
</li>
    <?php endforeach; ?>
    <h1>Submit Your Name</h1>
<form method='post' action ="/users">
    <input style="text" name="name">
    <button type="submit">Submit</button>
</form>
<?php
require_once 'partial/footer.php';
