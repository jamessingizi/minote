<?php
/**
 * @author James Singizi
 * @copyright 2016 
 */

//get all required config files
require_once '../_inc/config.php';
require_once '../_inc/classes/notes.class.php';
require_once '../_inc/classes/account.class.php';

if(!isset($_SESSION['account_id'])){
	echo "<script>window.location='../index.php'</script>";
}

$noteId = (int)filter_input(INPUT_GET, "note_id");

$note = new Notes();
$note->id = $noteId;
$data = array();
$noteContent = $note->getNoteById();

$data['message']= (!empty($noteContent))?'success':'error';

$data['note'] = $noteContent;


echo json_encode($data);