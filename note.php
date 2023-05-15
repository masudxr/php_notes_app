<?php

$heading = "Note";
$currentUserId = 1;

require './views/partials/header.php';
require './views/partials/nav.php';
require './views/partials/banner.php';

require './DB/Database.php';

$config = require './DB/config.php';
$db = new Database($config['database']);


$notes = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id'],
])->findOrFail();

if (!$notes) {
    abort();
}
echo 'Hello gamers !!!';

authorize($notes['user_id'] === $currentUserId);
echo 'Hello gamers !';
?>
<p class="mb-6">
    <a href="../php/notes.php" class="text-blue-500 underline"> Go Back..</a>
</p>
<?php
foreach ($notes as $note) :  ?>
    <?= $note['body'] ?>
<?php endforeach;  ?>

<?php require './views/partials/footer.php'; ?>