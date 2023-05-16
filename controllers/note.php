<?php

$heading = "Note";
$currentUserId = 1;

require './views/partials/header.php';
require './views/partials/nav.php';
require './views/partials/banner.php';

require './DB/Database.php';

$config = require './DB/config.php';
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $notes = $db->query('select * from notes where id = :id', [
        'id' => $_GET['id'],
    ])->findOrFail();

    $db->query('delete from notes where id = :id', [
        'id' => $_GET['id']
    ]);
    echo "removed Successful";
    header('location: /notes.php');
    exit();
} else {

$notes = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id'],
])->findOrFail();

// var_dump($notes['body']);

if (!$notes) {
    abort();
}

?>
<p class="mb-6">
    <a href="/notes.php" class="text-blue-500 underline"> Go Back..</a>
</p>
<p>
<?= htmlspecialchars($notes['body']) ?>
</p>

<form class="mt-6" method="POST">
    <input type="hidden" name="id" value="<?= $notes['id'] ?>">
<button class="text-sm text-red-500">Delete</button>
</form>

<?php
}

require './views/partials/footer.php';