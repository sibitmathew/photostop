<?php
if (!empty($_FILES)) {

	$filename = $_FILES['Filedata']['name'];
	$filetmpname = $_FILES['Filedata']['tmp_name'];
	$fileType = $_FILES["Filedata"]["type"];
	$fileSizeMB = ($_FILES["Filedata"]["size"] / 1024 / 1024);
	$filename=$_REQUEST['filename'];
	$folder=$_REQUEST['folder'];
	// Place file on server, into the images folder
	move_uploaded_file($_FILES['Filedata']['tmp_name'], $folder.$filename);
	//echo $filename;
}elseif($_POST['d']){
	$filename = $_POST['d'];
	$folder=$_REQUEST['folder'];
	$dFile = $folder.$filename;
	if(file_exists($dFile)){
		unlink($dFile);
	}
}
?>