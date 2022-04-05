<?php

// store file metadata 

$filename = 'books/Melville.csv';

$files = array();
$files['size'] 			= filesize($filename);
$files['createdAt'] 	= (new \DateTime())->setTimestamp(filectime($filename));
$files['updatedAt'] 	= (new \DateTime())->setTimestamp(filemtime($filename));
$files['isReadable'] 	= is_readable($filename);
$files['isWritable'] 	= is_writable($filename);
$files['isExecutable'] 	= is_executable($filename);
$files['type'] 			= filetype($filename);

print_r($files);