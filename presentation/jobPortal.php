<?php

class jobPortal{

	public  $jobDetails;
	public $page;
	public $totalJobs;
	public function __construct(){
		
		if(isset($_GET['job_portal'])){
			if(isset($_GET['page'])){
            $this->page = $_GET['page'];
            
        	}
        	
        	$company_name = $_GET['company_name'];
        	$city = $_GET['city'];
        	$job_type = $_GET['job_type'];
        	$functional_area = $_GET['functional_area'];
        	$industry_type = $_GET['industry_type'];
        	$experience = $_GET['experience'];
        	$job_keyword = $_GET['job_keyword'];
			//$queryString =  $_SERVER["QUERY_STRING"];
			//$queryString = urldecode($queryString);
			//var_dump($queryString);

			//$queryString = explode('&', $queryString);
			//var_dump($queryString);
			//$queryString = str_replace('?', ' AND ',$queryString[1]);
			
			$filteredJobs = catalogOperations::getAllFilteredJobs($this->page,$company_name,$job_keyword,$city,$job_type,$functional_area,$industry_type,$experience);
			$JobsCount = catalogOperations::getTotalJobs();
			$totalJobs = sizeOf($JobsCount);
			$this->totalJobs=$totalJobs;
			$this->jobDetails=$filteredJobs;
		
	}
}
}
?>