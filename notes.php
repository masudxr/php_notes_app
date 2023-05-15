<?php

$heading = "My Notes";

require './views/partials/header.php';
require './views/partials/nav.php';
require './views/partials/banner.php';



echo 'Welcome to my Notes page';

require './DB/Database.php';

$config = require './DB/config.php';

$db = new Database($config['database']);

$notes = $db->query('select * from notes where user_id = 1')->get();

// $users = $db->query("select * from users")->fetchAll();  // fetch all users
// $user = $db->query("select * from users where id = :id")->fetch();   //for single user
// $users = $db->query($query, [':id' => $id])->fetch();
?>
<ul>
<?php
foreach($notes as $note):  ?>
    <li>
        <a href="../php/note.php?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
        <?= htmlspecialchars($note['body']) ?>
        </a>
    </li>
    <?php endforeach;  ?>
</ul>

<p class="mt-6">
    <a href="./new.note.php" class="text-blue-500 hover:underline"> Create Note </a>
</p>
<?php require './views/partials/footer.php'; ?>