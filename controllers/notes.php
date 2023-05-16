<?php

$heading = "My Notes";

require './views/partials/header.php';
require './views/partials/nav.php';
require './views/partials/banner.php';

echo 'Welcome to my Notes page !';


$config = require('./DB/config.php');
$db = new Database($config['database']);

$notes = $db->query('select * from notes where user_id = 1')->get();

dd($notes);

// $notes = $db->query("select * from notes")->get();  // fetch all notes
// $user = $db->query("select * from users where id = :id")->fetch();   //for single user
// $users = $db->query($query, [':id' => $id])->fetch();
require('./views/notes.view.php');
require('./views/partials/footer.php');