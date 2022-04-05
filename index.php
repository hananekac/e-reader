<?php

// Video 1: read all content of a file using file_get_contents, file, readfile

$filename = 'books/sherlock-holmes.txt';
$content = file_get_contents($filename); // this function gets all content of a file and store it in a variable

//echo $content;

$contentInArray = file($filename); // gets content of a file and stores each line in an array 
//print_r($contentInArray);

//readfile($filename); // similar to file_get_contents, no need to stores content in variable it sends data to the output buffer.


//Video 2 : read content of file using fopen, fclose

$file = fopen($filename, 'r'); // open for mode reading only 'r'

// while($data = fgets($file)){
// 	echo $data;
// }

// while (!feof($file)){
// 	//echo fread($file, 500);
// 	//fgets(STDIN); // Works when using CLI
// }
// fclose($file);

// Video 3 : writing to a file : read content of CSV file and put it to another

$csvfilename = 'books/library.csv';
$datasToInsert = [];

$csv = fopen($csvfilename,'r');

while(($row=fgetcsv($csv)) != null){
	if( $row[1] === 'Herman Melville'){
		$datasToInsert[] =$row;
	}
}

fclose($csv);

$csvToWrite = fopen('books/Melville.csv', 'w');
foreach($datasToInsert as $value) {
	fputcsv($csvToWrite, $value);
}
fclose($csvToWrite);