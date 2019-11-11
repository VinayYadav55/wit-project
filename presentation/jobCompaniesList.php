
<?php

class jobCompaniesList{

public  $jobCompanies;
public function __construct(){

if(isset($_GET['job_portal'])){
$companies = catalogOperations::getAllJobRegisteredCompany();
$this->jobCompanies=$companies;
}


}
}
?>