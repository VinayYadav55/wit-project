<?php

class pastSpecificEvent{
	
	public $eventDetails = [];

	public function __construct(){
		
		$url = $_SERVER['QUERY_STRING']; 
		$parameters = explode('&', $url);
		
		$directoryFolder = $parameters[1];
		$eventId =  $parameters[2];
		$imageDirectory =  getcwd().'\images\ ';
		$imageDir='images/';
		$imageDir = trim($imageDir);
		$imageDirectory = trim($imageDirectory);
		

		$recursiveIterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($imageDirectory.$directoryFolder));

		$imagesPath = array(); 

		foreach ($recursiveIterator as $file) {

		    if ($file->isDir()){ 
		        continue;
		    }
		    $path_parts = pathinfo($file->getPathname());
			$returnArray = ['image_url' => $imageDir.$directoryFolder.'/'.$path_parts['basename']];
		    $imagesPath[] = $returnArray;
		    
		     }
		array_push($this->eventDetails, array("imagesPath" =>$imagesPath));
		}
}
?>