<?php

class vipananAdmin{



	public $jobRegisteredcompanies;
	public $companyFullData;
	public $companyDetail;

	public function __construct(){

		if(isset($_GET['vipanan_wit_dashboard'])||isset($_GET['dashboard'])){

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

	    if(isset($_POST["vipananLogin"])){
	      $email= $_POST["vipananadminemail"];
	      $password= $_POST["vipananadminpassword"];

	      $checkVipananLogIn = catalogOperations::checkVipananLogin($email,$password);
	      if($checkVipananLogIn){
	      	$_SESSION['vipananSession']=$checkVipananLogIn;
	      	$response  = array('success' => 'true', 'message'=>'Login Success','redirect_url'=>base_url().'/vipanan_wit_dashboard');
	      	echo json_encode($response);
	      	exit;
	      }else{
	      	$response  = array('success' => 'fail', 'message'=>'Invalid email or password');
	      	echo json_encode($response);
	      	exit;
	      }
	    
	      
	    }

	   if(isset($_POST["vipananAddCompanies"])){
	      $contactPersonName= $_POST["contactPersonName"];
	      
	      $email=$_POST["email"];
	      $password=$_POST["password"];
	     
	      $designation=$_POST["designation"];
	      $alternateemail=$_POST["alternateemail"];
	      $contact=$_POST["contact"];
	      $orgname=$_POST["orgname"];
	      $orgdes=$_POST["orgdes"];
	      $orggstnum=$_POST["orggstnum"];
	      $orglogo=$_POST["orglogo"];
	      $orgnum=$_POST["orgnum"];
	      $orgaddress=$_POST["orgaddress"];
	      $orgstate=$_POST["orgstate"];
	      $orgcity=$_POST["orgcity"];
	      $orgpin=$_POST["orgpin"];

	      $check = catalogOperations::checkRegisteredCompany($email);
	      if($check){
	      	echo json_encode($response = array('success' => 'fail','message'=>'Company already registered'));
	      	exit;
	      }else{
	      	$createCompany=catalogOperations::createCompany($orgname, $email,$contactPersonName,$designation, $orgaddress,$orgnum,$contact,$alternateemail,$orggstnum, $password,$orgdes,$orgstate,$orgcity,$orgpin);
	      	$body = " <div
					style='font-family: monospace;font-size: 15px;margin: auto;letter-spacing: 0px !important;border: 2px solid #0909aa;padding: 3rem;'>
					<p style='padding: 5px;'>Dear".' ' .$orgname."</p>
					<p style='padding: 5px;'>Your Employer Account Created successfully.Below are the LogIn Details For Your Account.
					</p>
					<p style='padding: 5px;'>UserName:".' ' .$email."</p>
					<p style='padding: 5px;'>Password:".' ' .$password."</p>
					<p style='padding: 5px;'>Please click on the link to login:" .base_Url().'/employer'."</p>
					
				</div>";
		      if($createCompany){
		      	echo json_encode($response = array('success' => 'true','message'=>'Company created successfully', 'redirect_url'=>base_url().'/vipanan_wit_dashboard' ));
		      	sendMail::companyCreation($email,$body);
		      }else{
		      	echo json_encode($response = array('success' => 'fail','message'=>'Error In creating company'));
		      }
		      exit();
	      }
	      
    	}

    	if(isset($_GET['vipanan_edit_company'])||$_GET['edit']){
    		$company_id = $_GET['company_id'];
    		if($_GET['edit']){
				$sessionCompanyId = $_SESSION['companySession']['id'];
				if($company_id==$sessionCompanyId){
					$companyDetails = catalogOperations::getRegisteredCompanydetails($company_id);
		    		$name = $companyDetails['contact_person_name'];
		    		$name = explode(' ', $name);
		    		$companyDetails['first_name']=$name[0];
		    		$companyDetails['last_name']=$name[1];
		    		$this->companyDetail=$companyDetails;
				}else{
		    		$this->companyDetail=' ';
				}
				
    		}else{
    			$companyDetails = catalogOperations::getRegisteredCompanydetails($company_id);
		    		$name = $companyDetails['contact_person_name'];
		    		$name = explode(' ', $name);
		    		$companyDetails['first_name']=$name[0];
		    		$companyDetails['last_name']=$name[1];
		    		$this->companyDetail=$companyDetails;
    		}
    		
    	}

    	if(isset($_POST['removecompany'])){
    		$company_id = $_POST['company_id'];
    		$removed= catalogOperations::removecompany($company_id);
    		
    		if($removed){
    			$getallCompJob = catalogOperations::getallJobsByCompany($company_id);
    			if($getallCompJob){
    			    foreach ($getallCompJob as $jobId) {
        				$jobId = $jobId['job_id'];
        				$removeJobapplicants = catalogOperations::removeJobapplicants($jobId);
        				$removeJob_post=catalogOperations::removeJobPost($jobId);

    			    }
    			    $emptyJobCompanyMap = catalogOperations::removeCompanyFromMap($company_id);
    			    $response = array('success' => 'true', 'message'=>'Company Removed successfully' );
    				echo json_encode($response);
    				exit;
    			    
    			}else{
    			        $response = array('success' => 'true', 'message'=>'Company Removed successfully' );
    				    echo json_encode($response);
    				    exit;
    			}
    			
    			
    			if($emptyJobCompanyMap){
    				
    			}
    		}
    		exit;
    	}

    	if(isset($_POST['vipananUpdateCompanies'])){

    		$contactPersonName= $_POST["contactPersonName"];
	      	$company_idd = $_POST['company_id'];
	      	
		      $email=$_POST["email"];
		      $password=$_POST["password"];
		     
		      $designation=$_POST["designation"];
		      $alternateemail=$_POST["alternateemail"];
		      $contact=$_POST["contact"];
		      $orgname=$_POST["orgname"];
		      $orgdes=$_POST["orgdes"];
		      $orggstnum=$_POST["orggstnum"];
		      $orglogo=$_POST["orglogo"];
		      $orgnum=$_POST["orgnum"];
		      $orgaddress=$_POST["orgaddress"];
		      $orgstate=$_POST["orgstate"];
		      $orgcity=$_POST["orgcity"];
		      $orgpin=$_POST["orgpin"];
		     

		      $update = catalogOperations::updateCompanyProfile($orgname, $email,$contactPersonName,$designation, $orgaddress,$orgnum,$contact,$alternateemail,$orggstnum,$orgdes,$orgstate,$orgcity,$orgpin,$company_idd);

		      if($update){
		      	$response = array('success' => 'true', 'message'=>'Company Profile Updated Successfully', 'redirect_url'=>base_url().'/vipanan_wit_dashboard');
    				echo json_encode($response);
    				exit;
		      }else{
		      	$response = array('success' => 'fail', 'message'=>'Error In Updating Company Profile' );
    				echo json_encode($response);
    				exit;
		      }

    	}

    	if(isset($_POST['logOut'])){

			unset($_SESSION['vipananSession']);
			echo json_encode(1);
			exit;
		}
  
	}
}

?>