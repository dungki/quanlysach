<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];

	require_once ('dbhelper.php');
	$sql = 'delete from tbl_book where id = '.$id;
	execute($sql);
}