<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Note';

$notes = $db->query('select * from notes where user_id = 1;')->get();


require "views/notes.view.php";