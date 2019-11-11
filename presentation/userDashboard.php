<?php

class userDashboard{
	public $unFollowedMentorProfiles;
	public $followedMentorProfiles;
	public $userId;
	public $appliedJobsList;
	public function __construct(){
		$userId = $_SESSION['userDetails']['id'];
		$allAppliedJobs = catalogOperations::getUserAppliedJobs($userId);
		$this->appliedJobsList=$allAppliedJobs;


		if(isset($_POST['updateProfile'])){

					$applicantId = $_SESSION['userDetails']['id'];
	                  $preferCity= $_POST["preferCity"];
	                  if($preferCity!=''){
	                     $preferCity = implode(',',$preferCity);
	                  }
	                  $preferJobType= $_POST["preferJobType"];
	                  if($preferJobType!=''){
	                    $preferJobType = implode(',',$preferJobType);
	                  }
	                  $functionalArea= $_POST["functionalArea"];
	                  if($functionalArea!=''){
	                    $functionalArea = implode(',',$functionalArea);
	                  }
	                  $IndustryType= $_POST["IndustryType"];
	                  if($IndustryType!=''){
	                    $IndustryType = implode(',',$IndustryType);
	                  }
	                  $experience= $_POST["Experience"];
	                  
	                    $highschoolrecord= $_POST["highschoolrecord"];
	                  if($highschoolrecord!=''){
	                    $highschoolrecord = implode(',' ,$highschoolrecord);
	                  }
	                    $highersecondaryrecord= $_POST["highersecondaryrecord"];
	                  if($highersecondaryrecord!=''){
	                  	$highersecondaryrecord = implode(',', $highersecondaryrecord);
	                  }
	                  $graduationrecord= $_POST["graduationrecord"];
	                  if($graduationrecord!=''){
	                    $graduationrecord = implode(',', $graduationrecord);
	                  }
	                  $postgraduationrecord= $_POST["postgraduationrecord"];
	                  if($postgraduationrecord!=''){
	                    $postgraduationrecord = implode(',', $postgraduationrecord);
	                  }
	                  $otherEducation= $_POST["otherEducation"];
	                  if($otherEducation!=''){
	                    $otherEducation = implode(',', $otherEducation);
	                  }
	                  $employeeskills= $_POST["skills"];
	                  if($employeeskills!=''){
	                    $employeeskills = implode(',' ,$employeeskills);
	                  }
	                  $project1= $_POST["project1"];
	                  if($project1!=''){
	                    $project1 = implode(',',$project1);
	                  }
	                  $project2= $_POST["project2"];
	                  if($project2!=''){
	                    $project2 = implode(',' ,$project2);
	                  }
	                  $project3= $_POST["project3"];
	                  if($preferCity!=''){
	                    $project3 = implode(',', $project3);
	                  }
	                  $dob= $_POST["dob"];
	                  $maritalstatus= $_POST["maritalstatus"];
	                  $permanentAddress= $_POST["permanentAddress"];
	                  $hometown= $_POST["hometown"];
	                  $addressPINCode= $_POST["addressPINCode"];
	                  $currentjobRecord= $_POST["currentjobRecord"];
	                  if($currentjobRecord!=' '){
	                        $currentWorkingStatus = 'Yes';
	                        $current_company = $currentjobRecord[1];
	                        $current_salary = $currentjobRecord[4];
	                        $current_designation = $currentjobRecord[0];
	                        $current_company_joinee_date = $currentjobRecord[2];
	                        $current_company_joinee_month = $currentjobRecord[3];
	                        $current_job_description = $currentjobRecord[5];
	                  }else{
	                        $currentWorkingStatus = 'No';
	                  }
	                  
	                  $previousjob1record= $_POST["previousjob1record"];
	                  $previousjob1record = implode(',', $previousjob1record);
	                  $previousjob2record= $_POST["previousjob2record"];
	                  $previousjob2record = implode(',', $previousjob2record);
	                  $previousjob3record= $_POST["previousjob3record"];
	                  $previousjob3record = implode(',', $previousjob3record);
	                   $contactPhone = $_POST['phone'];
	                  $contactEmail = $_POST['email'];
	                  /*var_dump($applicantId,$preferCity,$preferJobType,$functionalArea,$IndustryType,$experience,$hometown,$highschoolrecord,$highersecondaryrecord,$graduationrecord,$postgraduationrecord,$otherEducation,$employeeskills,$project1,$project2,$project3,$currentWorkingStatus,$current_company,$current_salary,$current_designation,$current_company_joinee_date,$current_job_description,$previousjob1record,$previousjob2record,$previousjob3record,$contactPhone,$contactEmail,$dob,$maritalstatus,$permanentAddress,$addressPINCode);*/
	                
	                 
	                        $updateCandidate=catalogOperations::updateCandidateProfile($preferCity,$preferJobType,$functionalArea,$IndustryType,$experience,$hometown,$highschoolrecord,$highersecondaryrecord,$graduationrecord,$postgraduationrecord,$otherEducation,$employeeskills,$project1,$project2,$project3,$currentWorkingStatus,$current_company,$current_salary,$current_designation,$current_company_joinee_date,$current_company_joinee_month,$current_job_description,$previousjob1record,$previousjob2record,$previousjob3record,$contactPhone,$contactEmail,$dob,$maritalstatus,$permanentAddress,$addressPINCode,$applicantId);
	                        /*var_dump($updateCandidate);*/
	                        if($updateCandidate){
	                              echo json_encode($response  = array('success' =>'true' , 'message'=>'Profile Updated','redirect_url'=>base_url().'/uploadResume'));
	                        }else{

	                              echo json_encode($response  = array('success' =>'Fail' , 'message'=>'Some Error Occur'));
	                        }
	                        exit();
		}
		if(isset($_GET['mentors_profile'])){
			$user_id = $_SESSION['userDetails']['id'];
			$getFollowedMentors = catalogOperations::getFollowedMentorsList($user_id);
			$this->followedMentorProfiles=$getFollowedMentors;
			$getUnFollowedMentors = catalogOperations::getUnFollowedMentors($user_id);
			$this->unFollowedMentorProfiles=$getUnFollowedMentors;

		}
	}
}

?>