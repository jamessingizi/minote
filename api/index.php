<?php
/**
 * api index page for getting all notes in the database
 */

//get all required config files
require_once '../_inc/config.php';
require_once '../_inc/classes/notes.class.php';

$note = new Notes();

$note->account_id="af152c456b2194ccd";
$allNotes = $note->getNotes();

//echo "<pre><tt>".var_export($allNotes,true)."</tt></pre>";
echo json_encode($allNotes);
