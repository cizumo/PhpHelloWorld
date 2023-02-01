<?php

namespace Core;

use Core\App;
use Core\Database;

$db = App::container()->resolve(Database::class);

$notes = $db->query('select * from notes where user_id = 1')->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);