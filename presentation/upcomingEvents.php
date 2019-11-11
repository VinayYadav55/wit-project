<?php

class upcomingEvents{
	public $upcomingEvents;

	public function __construct(){
		$result = CatalogOperations::getAllEvents();
		$this->upcomingEvents = $result;
	}
}

?>