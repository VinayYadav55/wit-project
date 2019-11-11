<?php

class witAdmin{



	public $jobRegisteredcompanies;
	public $companyFullData;
	public $companyDetail;

	public function __construct(){

		if(isset($_GET['dashboard'])){

			$allCompaniesList = catalogOperations::getAllJobRegisteredCompany();
			$i=0;
			foreach($allCompaniesList as $date){
			    $createdDate = $date['created_on'];
			    $create_date = date_create($createdDate);
    			$createdDatee = date_format($create_date,"d M Y ");
    	        $allCompaniesList[$i]['created_on']=$createdDatee;
    	        $i++;
			    
			}
			$this->jobRegisteredcompanies=$allCompaniesList;

		}


	   

    	

    	



    	
  
	}
}

?>