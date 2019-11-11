<?php

	class postedJob{

		public  $jobDetails = [];
		public  $JobIdDetails;
		public $userStatusForJob;
		public function __construct(){

			if(isset($_POST['applyJob'])){

				$applicant_id = $_SESSION['userDetails']['id'];
				$job_id = $_POST['job_id'];
				$checkUserRegisteredForJob = catalogOperations::checkJobRegisteredUser($applicant_id);
				if($checkUserRegisteredForJob['job_portal'] == 1){
					$checkCandidate = catalogOperations::checkAppliedCandidate($job_id,$applicant_id);
				if($checkCandidate){
					$response = array('success' => 'fail' ,'message'=>'Already Applied');
					echo json_encode($response);
					exit;
				}else{
				$status=catalogOperations::applyForJob($applicant_id,$job_id);
				if($status==1){
					$status1 = catalogOperations::updateapplicantCount($job_id);
					if($status1){
						$response = array('success' => 'true' ,'message'=>'Applied Successfully' );
							echo json_encode($response);
							exit;
					}else{
						$response = array('success' => 'Fail' ,'message'=>'Some Error Occured');
							echo json_encode($response);
							exit;
					}
					
				}}}
				else{
				    if($_SESSION['userDetails']){
				        $response = array('success' => 'Not Registered For Job Portal' ,'message'=>'Please update your details for job application.','redirect_url'=>base_url().'/candidate_registration');
				    }else{
				        $response = array('success' => 'Not Registered' ,'message'=>'Please login before applying for job.','redirect_url'=>base_url().'/login');
				    }
					
					
					echo json_encode($response);
					exit;
				
			}
			}
 		
			
		if(isset($_GET['posted_job'])||isset($_GET['vipanan_view_company_job_full_detail'])||isset($_GET['job_full_detail'])){

				$job_id = $_GET['job_id'];
                $job_id = $job_id;
              
				$companyId = $_SESSION['companySession']['id'];
				$getJobDetails =  catalogOperations::getJobDetailsByJobId($job_id);
				$this->jobDetails['jobDetails']=$getJobDetails;

		}


		if(isset($_GET['editJob'])){

			if(isset($_POST['updateJob'])){
				$companyId          = $_SESSION['company_session']['id'];
				$jobId 				= $_POST['jobId'];
				$jobtitle           = $_POST['jobtitle'];
				$jobdesc            = $_POST['jobdesc'];
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
				$qualificationInput = implode(",", $qualificationInput);
				$skillsInput = implode(",", $skillsInput);
				$jobfunctionalareaInput = implode(",", $jobfunctionalareaInput);
				$jobIndustryInput   = implode(",", $jobIndustryInput);
				$queryReturn = catalogOperations::updateJobDetails($jobtitle,$qualificationInput,$experienceInput,$skillsInput,$jobType,$jobLocationInput,$jobfunctionalareaInput,$jobIndustryInput,$numberofopening,$jobStartDateInput, $jobSalaryInput,$jobdesc,$jobId);
				if($queryReturn){
					$response =  array('success' => 'true', 'message'=>'job Details updated Successfully');

					echo json_encode($response);
					exit;
				}else{
					$response =  array('success' => 'fail', 'message'=>'Error while Updating');

					echo json_encode($response);
				}
				
			}else{
				$job_id = $_GET['job_id'];

				$companyId = $_SESSION['companySession']['id'];
				$getJobDetails =  catalogOperations::getJobDetailsByJobId($job_id);
				
				$qualificationns=explode(',',$getJobDetails['qualifications']);
				$required_skills=explode(',',$getJobDetails['required_skills']);
				$industry = explode(',',$getJobDetails['job_industry_type']);
				$job_functional_area=explode(',',$getJobDetails['job_functional_area']);

				$getJobDetails['qualificationArray'] = $qualificationns;
				$getJobDetails['required_skills_array'] = $required_skills;
				$getJobDetails['job_functional_area_array'] = $job_functional_area;
                $getJobDetails['job_industry_array']=$industry;
				$this->jobDetails['jobDetails']=$getJobDetails;

			}
		}

		if(isset($_GET['job_title'])||$_GET['job_details']){
			$job_id=$_GET['job_id'];
			$job_Id_Details = catalogOperations::getSingleJobDetailByJobId($job_id);

			$post_date = $job_Id_Details['posted_date'];
				$last_date = $job_Id_Details['deadline_date'];
				$start_date = strtotime($date); 
				$end_date = strtotime($last_date);
				$post_date = date_create($post_date);
				$last_date = date_create($last_date);
				$post_date = date_format($post_date,"d M Y ");
				$last_date = date_format($last_date,"d M Y ");
				$job_Id_Details['posted_date'] = $post_date;
				$job_Id_Details['deadline_date'] = $last_date;
			$this->JobIdDetails=$job_Id_Details;
		}
		
		if(isset($_GET['job_title'])){
			$userId = $_SESSION['userDetails']['id'];
			$checkUserForJobRegistration = catalogOperations::checkJobRegisteredUser($userId);
			$registered = $checkUserForJobRegistration['job_portal'];
			$this->userStatusForJob['isRegisteredForJob']=$registered;
			
		}

		
		

		

	}
}
	


?>