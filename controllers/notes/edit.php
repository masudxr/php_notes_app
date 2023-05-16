<?php

$heading = "Edit Note";

require('Validator.php');

require('./views/partials/header.php');
require('./views/partials/nav.php');
require('./views/partials/banner.php');

// view("notes/edit/view.php", [
//     'heading' => 'Edit Note',
//     'error' => ''
// ]);

require './DB/Database.php';
$config = require './DB/config.php';
$db = new Database($config['database']);
echo 'Edit Note !';

?>
<main>
    <form method="POST">
        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Edit Note</label>
        <div class="mt-2">
            <textarea 
            id="body" 
            name="body" 
            rows="3" 
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            placeholder="Put Your Note Here !"
            required
            ></textarea>
        </div>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </form>
</main>