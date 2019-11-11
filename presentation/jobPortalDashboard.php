<?php
class jobPortalDashboard{

	public  $jobDetails = [];
	public  $companyDetails;
	public function __construct(){
		
		if(isset($_GET['job_portal_dashboard'])|| isset($_GET['company_id'])){
			
			if($_GET['company_id']){
				$companyId = $_GET['company_id'];
			}else{
				$companyId =$_SESSION['companySession']['id'];
			}
		

			$companyFullDetails = catalogOperations::getRegisteredCompanydetails($companyId);
    

			$allJobId = catalogOperations::getAllCompanyJobs($companyId);
		
			$totalJobsPosted = sizeof($allJobId);
			$companyFullDetails['totalJobPosted']=$totalJobsPosted;

			$i=0;
			foreach ($allJobId as $jobId) {
				$date = date("Y-m-d");

				$post_date = $jobId['posted_date'];
				$last_date = $jobId['deadline_date'];
				$start_date = strtotime($date); 
				$end_date = strtotime($last_date);
				$post_date = date_create($post_date);
				$last_date = date_create($last_date);
				$post_date = date_format($post_date,"d M Y ");
				$last_date = date_format($last_date,"d M Y ");
				$allJobId[$i]['posted_date'] = $post_date;
				$allJobId[$i]['deadline_date'] = $last_date;
				$diffrence = ($end_date-$start_date)/60/60/24;
				if($diffrence>=0){
					$allJobId[$i]['active_status'] = 'Active';
				}else{
					$allJobId[$i]['active_status'] = 'Closed';
				}
				
				$i++;
			}
			$this->jobDetails['jobDetails']=  $allJobId;
            
			$this->companyDetails= $companyFullDetails;
			//var_dump($this->jobDetails);

	
		//var_dump($this->jobDetails);
			
		}
		
	
		if(isset($_POST['postJob'])){
		    
			$companyId          = $_SESSION['companySession']['id'];
			$jobtitle           = $_POST['jobtitle'];
			$qualificationInput = $_POST['qualificationInput'];
			$experienceInput    = $_POST['experienceInput'];
			$skillsInput  		= $_POST['skillsInput'];
			$jobType            =  $_POST['jobtype'];
			$jobLocationInput  	= $_POST['jobLocationInput'];
			$jobfunctionalareaInput	= $_POST['jobfunctionalareaInput'];
	
			$jobIndustryInput  		= $_POST['jobIndustryInput'];
			$numberofopening  		= $_POST['numberofopening'];
			$jobStartDateInput  	= $_POST['jobStartDateInput'];
			$jobSalaryInput			= $_POST['jobSalaryInput'];
			$jobDescription         = $_POST['jobDescription'];
			$qualificationInput = implode(",", $qualificationInput);
			$skillsInput = implode(",", $skillsInput);
			$jobfunctionalareaInput = implode(",", $jobfunctionalareaInput);
			$jobIndustryInput   = implode(",", $jobIndustryInput);
			
				$insertStatus = catalogOperations::insertJobDetails($jobtitle,$qualificationInput,$experienceInput,$skillsInput,$jobType,$jobfunctionalareaInput,$jobLocationInput,$jobIndustryInput,$numberofopening,$jobStartDateInput, $jobSalaryInput,$jobDescription);

				if($insertStatus==1){
					$lastInsertJobId = catalogOperations::getLastInsertJobId();

					$status = catalogOperations::insertJobIdInMapTable($companyId,$lastInsertJobId);
					if($status){
						$response = array("success"=>"true", "message"=>"Job Post Successfully");
						echo json_encode($response);
					}else{
						$response = array("success"=>"fail", "message"=>"Error in posting job");
						echo json_encode($response);
					}
				}
			
			exit;
		}
		if(isset($_POST['companylogin'])){
			$email = $_POST['email'];
			$password = $_POST['password'];
			$companyData = catalogOperations::getCompanyPasswordHash($email,$password);

			if($companyData){
				$_SESSION['companySession']=$companyData;
				$companySession=$_SESSION['companySession'];
				
				$response  = array('success' => 'true','message'=>'Login successfull' ,'redirect_url'=>base_url().'/job_portal_dashboard');

				echo json_encode($response);
			}else{
				$response  = array('success' => 'fail','message'=>'Email or Password Wrong ');
				echo json_encode($response);
			}
			
			exit;
		}

		if(isset($_POST['logOut'])){

			unset($_SESSION['companySession']);
			echo json_encode(1);
			exit;
		}
		if(isset($_POST['changepassword'])){
		    $company_id=$_SESSION['companySession']['id'];
		    $newPassword = $_POST['enewpassword'];
		  
		    $changePassword = catalogOperations::changeEmployerPassword($company_id,$newPassword);
		    if($changePassword){
		        $response = array('success'=>'true', 'message'=>'Password Changed Successfully');
		        echo json_encode($response);
		        unset($_SESSION['companySession']);
		        exit;
		    }else{
		        $response = array('success'=>'fail', 'message'=>'Error In Changing Password');
		        echo json_encode($response);
		        exit;
		    }
		}
		
		if(isset($_POST['removejob'])){
		    
		    $job_id = $_POST['job_id'];
		   
		    $removeJob=catalogOperations::removeJobPost($job_id);
		    
		    $removeFromCompanyJobMapId=catalogOperations::removeFromCompanyJobMapId($job_id);
		    
		    if($removeFromCompanyJobMapId){
		        
		        $checkJobApplicant = catalogOperations::checkJobApplicants($job_id);
		        if($checkJobApplicant){
		            $removeJobApplicants=catalogOperations::removeJobapplicants($job_id);
		            
		            $response = array('success'=>'true','message'=>'Job Removed Succcessfully'); 
		            echo json_encode($response);
		            exit;
		        }else{
		            $response = array('success'=>'true','message'=>'Job Removed Succcessfully'); 
		            echo json_encode($response);
		            exit;
		        }
		        
		    }
		    
		    
		}
	}
}
?>