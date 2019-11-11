<?php

class catalogOperations {

	public static function getAllEvents(){
		$sql = "SELECT * FROM events";

		return DatabaseHandler::GetAll($sql);
	}

	public static function getAllMentorsList(){
		$sql = "SELECT * FROM users WHERE type='Mentor'";

		return DatabaseHandler::GetAll($sql);
	}

	public static function changeMentorStatus($mentorId){
		$sql = "UPDATE users SET  mentor_approved=1 WHERE id='$mentorId'";

		return DatabaseHandler::Execute($sql);
	}

	public static function checkExistingUser($emailSignUp){
		$sql = "SELECT * FROM users WHERE email_id=?";
		$params=[$emailSignUp];

		return DatabaseHandler::GetRow($sql, $params);
	}	

	public static function registerUser($firstName,$lastName,$emailSignUp,$phone,$gender,$type,$hashPassword,$vkey){

		$sql = "INSERT INTO users (first_name, last_name, email_id, phone_no, gender, type, password,v_key) VALUES (?,?,?,?,?,?,?,?)";
		$params = [$firstName, $lastName, $emailSignUp,$phone, $gender, $type, $hashPassword,$vkey];
		return DatabaseHandler::Execute($sql,$params);
	}

	public static function getUserPasswordHash($email){

		$sql = "SELECT password FROM  users WHERE email_id= ?";
		$params = [$email];
		return DatabaseHandler::GetOne($sql,$params);
	}

	public static function getUserDetails($email){

		$sql = "SELECT * FROM  users WHERE email_id= ?";
		$params = [$email];
		return DatabaseHandler::GetRow($sql,$params);
	}

	public static function checkVerificationKey($v_key){

		$sql = "SELECT * FROM  users WHERE is_verified=0 AND v_key= ?";
		$params = [$v_key];
		return DatabaseHandler::GetRow($sql,$params);
	}

	public static function changeVerificationStatus($email){

		$sql = "UPDATE users SET is_verified=1 WHERE email_id=?";
		$params = [$email];
		return DatabaseHandler::Execute($sql,$params);
	}

	public static function insertResetKey($userId,$reset_key){

		$sql = "UPDATE users SET password_reset_key=? WHERE id=?";
		$params = [$reset_key,$userId];
		return DatabaseHandler::Execute($sql,$params);
	}

	public static function checkExistingUserByEmail($email){

		$sql = "SELECT * FROM  users WHERE email_id= '$email'";
		
		return DatabaseHandler::GetRow($sql);
	}

	public static function changePassword($email,$hashPassword){

		$sql = "UPDATE users SET password='$hashPassword' WHERE email_id='$email'";
		
		return DatabaseHandler::Execute($sql);
	}

	public static function getDetailsByPwdRestKey($queryString){

		$sql = "SELECT * FROM  users WHERE password_reset_key= '$queryString'";
		$params=[$queryString];
		return DatabaseHandler::GetRow($sql);
	}

	public static function insertJobDetails($jobtitle,$qualificationInput,$experienceInput,$skillsInput,$jobType,$jobfunctionalareaInput,$jobLocationInput, $jobIndustryInput,$numberofopening,$jobStartDateInput,$jobSalaryInput,$jobDescription){
	
		$sql = "INSERT INTO job_post ( job_title, qualifications, work_experience, required_skills, job_type, job_functional_area, job_location, job_industry_type, total_openings, deadline_date, salary_provide,job_description) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?,?)";
			$params = [$jobtitle,$qualificationInput,$experienceInput,$skillsInput,$jobType,$jobfunctionalareaInput,$jobLocationInput, $jobIndustryInput,$numberofopening,$jobStartDateInput,$jobSalaryInput,$jobDescription];
				return DatabaseHandler::Execute($sql,$params);
	}

	public static function getLastInsertJobId(){

		$sql = "SELECT  MAX(id) FROM  job_post";
		
		return DatabaseHandler::GetOne($sql);
	}

	public static function insertJobIdInMapTable($companyId,$lastInsertJobId){
		
		$sql = "INSERT INTO  job_companyid_map (company_id, job_id) VALUES (?,?)";
		$params = [$companyId,$lastInsertJobId];
		return DatabaseHandler::Execute($sql,$params);
	}

	public static function getAllCompanyJobs($companyId){

		$sql = "SELECT  job_companyid_map.*,job_post.* 
				FROM  job_companyid_map 
				INNER JOIN job_post 
				ON job_companyid_map.job_id=job_post.id WHERE company_id = ? ORDER BY job_post.posted_date DESC";
		$params = [$companyId];
		return DatabaseHandler::GetAll($sql,$params);
	}

	public static function getJobDetailsByJobId($job_id){

		$sql = "SELECT DISTINCT job_post.*, job_companyid_map.* FROM job_post INNER JOIN job_companyid_map ON job_post.id=job_companyid_map.job_id WHERE job_post.id=?";
			$params=[$job_id];
		return DatabaseHandler::GetRow($sql,$params);
	}

	public static function updateJobDetails($jobtitle,$qualificationInput,$experienceInput,$skillsInput,$jobType,$jobLocationInput,$jobfunctionalareaInput,$jobIndustryInput,$numberofopening,$jobStartDateInput, $jobSalaryInput,$jobdesc,$jobId){

		$sql = "UPDATE job_post SET job_title='$jobtitle', qualifications='$qualificationInput', work_experience='$experienceInput', required_skills='$skillsInput', job_type='$jobType', job_functional_area='$jobfunctionalareaInput', job_location='$jobLocationInput', job_industry_type='$jobIndustryInput', total_openings='$numberofopening', deadline_date='$jobStartDateInput', salary_provide='$jobSalaryInput',job_description='$jobdesc' WHERE id=$jobId";
		return DatabaseHandler::Execute($sql);
	}

	public static function applyForJob($applicant_id,$job_id){

		$sql = "INSERT INTO job_applicants (job_id , applicant_id) VALUES (?, ?)";
 
		$params=[$job_id,$applicant_id];

		return DatabaseHandler::Execute($sql,$params);
	}

	public static function updateapplicantCount($job_id){

		$sql = "UPDATE job_companyid_map SET applicant_count=applicant_count+1 WHERE job_id=?";
		$params=[$job_id];
		return DatabaseHandler::Execute($sql,$params);
	}

	public static function checkPasswordResetKey($reset_key){

		$sql = "SELECT * FROM  users WHERE  password_reset_key= ?";
		$params = [$reset_key];
		return DatabaseHandler::GetRow($sql,$params);
	}

	public static function resetPassword($email,$hashPassword){

		$sql = "UPDATE users SET password = '$hashPassword' WHERE email_id='$email'";
		
		return DatabaseHandler::Execute($sql,$params);
	}

	public static function getAllFilteredJobs($page,$company_name,$job_keyword,$city,$job_type,$functional_area,$industry_type,$experience){
   
		$rec_limit = 10;
        if ($page >= 1) {
            $offset = $rec_limit * ($page - 1);
           
        } else {
            $page = 0;
            $offset = 0;
        }
        $arr_size = sizeof($_GET);
        

			if($arr_size>2){

				$sql = "SELECT job_post.*,job_companyid_map.*, job_portal_companies.* FROM job_post 
					INNER JOIN job_companyid_map
					ON job_post.id=job_companyid_map.job_id
					INNER JOIN job_portal_companies
					ON job_companyid_map.company_id=job_portal_companies.id  " ;

			}else{

				$sql = "SELECT job_post.*,job_companyid_map.*, job_portal_companies.* FROM job_post 
					INNER JOIN job_companyid_map
					ON job_post.id=job_companyid_map.job_id
					INNER JOIN job_portal_companies
					ON job_companyid_map.company_id=job_portal_companies.id " ;
			}
			
			

					if($company_name){
						$company_string = '';
			            for ($i = 0; $i < count($company_name); $i++) {
			                $company_string = $company_string . " '$company_name[$i]',";
			              
			            }

			            $company_string = rtrim($company_string, ',');
						if($arr_size>2){			           
							$sql .=" WHERE job_portal_companies.company_name IN ($company_string) ";
						}elseif($arr_size==2){
							$sql .="WHERE job_portal_companies.company_name IN ($company_string)";

						}else{

						$sql .="WHERE job_portal_companies.company_name IN ($company_string) ";
					}}
					if($city){
					    $city_string = '';
            
			            for ($i = 0; $i < count($city); $i++) {
			                $city_string = $city_string . " '$city[$i]',";
			            }
            
            			$city_string = rtrim($city_string, ',');
						if($arr_size>2){
						
						    $sql .="AND job_post.job_location IN ($city_string)  ";
					    }elseif($arr_size==2){
					        $sql .="WHERE job_post.job_location IN ($city_string)  ";
					    }else{
						$sql .="WHERE job_post.job_location IN ($city_string)  ";
					}
				}

				if($job_type){

					$job_type_string = '';
            
			            for ($i = 0; $i < count($job_type); $i++) {
			                $job_type_string = $job_type_string . " '$job_type[$i]',";
			            }
            
            			$job_type_string = rtrim($job_type_string, ',');

					if($arr_size>2){
						
						$sql .="AND job_post.job_type IN ($job_type_string)  ";
					}elseif($arr_size==2){
					    $sql .="WHERE job_post.job_type IN ($job_type_string)  ";
					}else{

						$sql .="WHERE job_post.job_type IN ($job_type_string)  ";
					}
				}

				if($functional_area){
					$functional_area_string = implode($functional_area,',');
					

					if($arr_size>2){
						
						$sql .="AND job_post.job_functional_area LIKE '%$functional_area_string%'  ";
					}elseif($arr_size==2){
					    $sql .="WHERE job_post.job_functional_area LIKE '%$functional_area_string%'  ";
					}else{
						
						$sql .="WHERE job_post.job_functional_area LIKE '%$functional_area_string%'  ";
					}
				}

				if($industry_type){
					$industry_type_string = implode($industry_type,',');
					

					if($arr_size>2){
						
						$sql .="AND job_post.job_functional_area LIKE '%$industry_type_string%'  ";
					}elseif($arr_size==2){
					    $sql .="WHERE job_post.job_industry_type LIKE '%$industry_type_string%'  ";
					}else{
						
						$sql .="WHERE job_post.job_industry_type LIKE '%$industry_type_string%'  ";
					}
				}

				if($experience){
					$experience_string = '';
            
			            for ($i = 0; $i < count($experience); $i++) {
			                $experience_string = $experience_string . " '$experience[$i]',";
			            }
            
            			$experience_string = rtrim($experience_string, ',');
					

					if($arr_size>2){
						
						$sql .="AND job_post.work_experience IN ($experience_string) ";
					}elseif($arr_size==1){
					    $sql .="WHERE job_post.work_experience IN ($experience_string) ";
					}else{
						
						$sql .="WHERE job_post.work_experience IN ($experience_string) ";
					}
				}

				if($job_keyword){
					if($arr_size>2){
						
						$sql .="AND job_post.job_title LIKE '%$job_keyword%' OR job_post.job_description LIKE '%$job_keyword%' ";
					}elseif($arr_size==1){
					    	$sql .="WHERE job_post.job_title LIKE '%$job_keyword%' OR job_post.job_description LIKE '%$job_keyword%' ";
					}else{
						
						$sql .="WHERE job_post.job_title LIKE '%$job_keyword%' OR job_post.job_description LIKE '%$job_keyword%' ";
					}
				}
				


					
		
            
		

        $sql .="ORDER BY job_post.posted_date DESC LIMIT $offset,$rec_limit";
        
        
        
		return DatabaseHandler::GetAll($sql);
	}

	public static function getSingleJobDetailByJobId($job_id){
		$sql = "SELECT job_post.*, job_companyid_map.*,job_portal_companies.* FROM job_post 
				INNER JOIN job_companyid_map
				ON job_post.id=job_companyid_map.job_id
				INNER JOIN job_portal_companies ON 
				job_companyid_map.company_id=job_portal_companies.id  WHERE job_id=?";

		$params = [$job_id];
		return DatabaseHandler::GetRow($sql,$params);
	}

	public static function registerCandidateForJob($applicantId,$preferCity,$preferJobType,$functionalArea,$IndustryType,$experience,$hometown,$highschoolrecord,$highersecondaryrecord,$graduationrecord,$postgraduationrecord,$otherEducation,$employeeskills,$project1,$project2,$project3,$currentWorkingStatus,$current_company,$current_salary,$current_designation,$current_company_joinee_date,$current_company_joinee_month,$current_job_description,$previousjob1record,$previousjob2record,$previousjob3record,$contactPhone,$contactEmail,$dob,$maritalstatus,$permanentAddress,$addressPINCode){
	
		$sql = "INSERT INTO job_portal_applicant_details ( applicant_id, prefered_city, prefered_job_types, functional_area, industry_type, experience, resident_address, 10th_class_details, 12th_class_details, graduation_details, post_graduation_details,additional_education_details,skill_set,previous_project1_details,previous_project2_details,previous_project3_details,currently_working_status,current_company_name,current_salary,current_designation,current_company_joinee_date,current_company_joinee_month,current_job_descripton,previous_job1,previous_job2,previous_job3,contact_phone_no,contact_email,date_of_Birth,martial_status,permanent_address,pin_code) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$params = [$applicantId,$preferCity,$preferJobType,$functionalArea,$IndustryType,$experience,$hometown,$highschoolrecord,$highersecondaryrecord,$graduationrecord,$postgraduationrecord,$otherEducation,$employeeskills,$project1,$project2,$project3,$currentWorkingStatus,$current_company,$current_salary,$current_designation,$current_company_joinee_date,$current_company_joinee_month,$current_job_description,$previousjob1record,$previousjob2record,$previousjob3record,$contactPhone,$contactEmail,$dob,$maritalstatus,$permanentAddress,$addressPINCode];
				return DatabaseHandler::Execute($sql,$params);
	}

	public static function updateRegisteredField($applicant_id,$status){

		$sql = "INSERT INTO user_registered_fields (user_id, job_portal) VALUES (?, ?)";
 
		$params=[$applicant_id,$status];

		return DatabaseHandler::Execute($sql,$params);
	}
	public static function checkRegisteredCandidate($applicant_id){
		$sql = "SELECT * FROM job_portal_applicant_details WHERE applicant_id=?";
		$params = [$applicant_id];
		return DatabaseHandler::GetRow($sql,$params);
	}

	public static function checkAppliedCandidate($job_id , $applicant_id){
		$sql = "SELECT * FROM job_applicants WHERE job_id=? AND applicant_id=?";
		$params = [$job_id,$applicant_id];
		return DatabaseHandler::GetRow($sql,$params);
	}

	
	public static function checkJobRegisteredUser($applicant_id){
		$sql = "SELECT * FROM user_registered_fields WHERE user_id=?";
		$params = [$applicant_id];
		return DatabaseHandler::GetRow($sql,$params);
	}

	public static function getAppliedCandidateList($job_id){
		$sql = "SELECT DISTINCT job_applicants.applicant_id,job_portal_applicant_details.*, users.first_name,users.last_name FROM job_applicants INNER JOIN job_portal_applicant_details ON job_applicants.applicant_id=job_portal_applicant_details.applicant_id INNER JOIN users ON job_portal_applicant_details.applicant_id=users.id WHERE job_id=? ORDER BY job_applicants.applied_on DESC";
		$params = [$job_id];
	
		return DatabaseHandler::GetAll($sql,$params);
	}

	public static function getCandidateFullDetail($applicant_id){
		$sql = "SELECT job_portal_applicant_details.*,users.first_name,users.last_name
				FROM job_portal_applicant_details
				INNER JOIN users 
				ON job_portal_applicant_details.applicant_id=users.id WHERE applicant_id=?";
		$params = [$applicant_id];
		return DatabaseHandler::GetAll($sql,$params);
	}

	public static function getAllJobRegisteredCompany(){
		$sql = "SELECT * FROM job_portal_companies";
		
		return DatabaseHandler::GetAll($sql);
	}

	public static function getCompanyFullDetail($company_id){
		$sql = "SELECT DISTINCT job_portal_companies.*, job_companyid_map.job_id, job_post.* 
				FROM job_portal_companies 
				INNER JOIN job_companyid_map 
				ON job_portal_companies.id=job_companyid_map.company_id
				INNER JOIN job_post ON job_companyid_map.job_id=job_post.id 
				WHERE job_portal_companies.id=?";
		$params=[$company_id];
		return DatabaseHandler::GetAll($sql,$params);
	}

	 public static function createCompany($orgname, $email,$contactPersonName,$designation, $orgaddress,$orgnum,$contact,$alternateemail,$orggstnum, $password,$orgdes,$orgstate,$orgcity,$orgpin){

	    $sql = "INSERT INTO job_portal_companies (company_name, email_id, contact_person_name, designation, office_address, office_no, mobile_no, alternate_email_address, gst_number, passwordd, company_description, state, city, pin_code) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
	    $params = [$orgname, $email,$contactPersonName,$designation, $orgaddress,$orgnum,$contact,$alternateemail,$orggstnum, $password,$orgdes,$orgstate,$orgcity,$orgpin];
    	return DatabaseHandler::Execute($sql,$params);
  	}

  	public static function checkRegisteredCompany($email){
		$sql = "SELECT * FROM job_portal_companies WHERE email_id=?";
		$params=[$email];
		return DatabaseHandler::GetRow($sql,$params);
	}

	public static function getRegisteredCompanydetails($company_id){
		$sql = "SELECT * FROM job_portal_companies WHERE id=?";
		$params=[$company_id];
		return DatabaseHandler::GetRow($sql,$params);
	}

	public static function getUserAppliedJobs($user_id){
		$sql = "SELECT DISTINCT job_applicants.*,job_post.*, job_companyid_map.*, job_portal_companies.*
		 	FROM job_applicants
			INNER JOIN job_post 
			ON job_applicants.job_id= job_post.id
			INNER JOIN job_companyid_map
			ON job_post.id = job_companyid_map.job_id 
			INNER JOIN job_portal_companies 
			ON job_companyid_map.company_id = job_portal_companies.id  WHERE job_applicants.applicant_id=?";
		$params=[$user_id];
		return DatabaseHandler::GetAll($sql,$params);
	}

	public static function updateCandidateProfile($preferCity,$preferJobType,$functionalArea,$IndustryType,$experience,$hometown,$highschoolrecord,$highersecondaryrecord,$graduationrecord,$postgraduationrecord,$otherEducation,$employeeskills,$project1,$project2,$project3,$currentWorkingStatus,$current_company,$current_salary,$current_designation,$current_company_joinee_date,$current_company_joinee_month,$current_job_description,$previousjob1record,$previousjob2record,$previousjob3record,$contactPhone,$contactEmail,$dob,$maritalstatus,$permanentAddress,$addressPINCode,$applicantId){
	
		$sql = "UPDATE job_portal_applicant_details SET  prefered_city=?, prefered_job_types=?, functional_area=?, industry_type=?, experience=?, resident_address=?, 10th_class_details=?, 12th_class_details=?, graduation_details=?, post_graduation_details=?,additional_education_details=?,skill_set=?,previous_project1_details=?,previous_project2_details=?,previous_project3_details=?,currently_working_status=?,current_company_name=?,current_salary=?,current_designation=?,current_company_joinee_date=?,current_company_joinee_month=?,current_job_descripton=?,previous_job1=?,previous_job2=?,previous_job3=?,contact_phone_no=?,contact_email=?,date_of_Birth=?,martial_status=?,permanent_address=?,pin_code=? WHERE applicant_id=?";
			$params = [$preferCity,$preferJobType,$functionalArea,$IndustryType,$experience,$hometown,$highschoolrecord,$highersecondaryrecord,$graduationrecord,$postgraduationrecord,$otherEducation,$employeeskills,$project1,$project2,$project3,$currentWorkingStatus,$current_company,$current_salary,$current_designation,$current_company_joinee_date,$current_company_joinee_month,$current_job_description,$previousjob1record,$previousjob2record,$previousjob3record,$contactPhone,$contactEmail,$dob,$maritalstatus,$permanentAddress,$addressPINCode,$applicantId];
				return DatabaseHandler::Execute($sql,$params);
	}

	public static function removecompany($company_id){
		$sql = "DELETE FROM job_portal_companies WHERE id = ?";
		$params=[$company_id];
		return DatabaseHandler::Execute($sql,$params);
	}

	public static function getallJobsByCompany($company_id){
		$sql = "SELECT job_id FROM job_companyid_map WHERE company_id = ?";
		$params=[$company_id];
		return DatabaseHandler::GetAll($sql,$params);
	}

	public static function removeJobapplicants($jobId){
		$sql = "DELETE  FROM job_applicants WHERE job_id = ?";
		$params=[$jobId];
		return DatabaseHandler::Execute($sql,$params);
	}
	
	public static function checkJobApplicants($jobId){
		$sql = "SELECT  * FROM job_applicants WHERE job_id = ?";
		$params=[$jobId];
		return DatabaseHandler::Execute($sql,$params);
	}
	
	public static function removeFromCompanyJobMapId($jobId){
		$sql = "DELETE  FROM job_companyid_map WHERE job_id = ?";
		$params=[$jobId];
		return DatabaseHandler::Execute($sql,$params);
	}

	public static function removeJobPost($jobId){
		$sql = "DELETE  FROM job_post WHERE id = ?";
		$params=[$jobId];
		return DatabaseHandler::Execute($sql,$params);
		
	}

	public static function removeCompanyFromMap($company_id){
		$sql = "DELETE FROM job_companyid_map WHERE company_id = ?";
		$params=[$company_id];
		return DatabaseHandler::Execute($sql,$params);
	}

	public static function checkVipananLogin($email,$password){
		$sql = "SELECT * FROM vipanan_login WHERE email=? AND password=?";
		$params=[$email,$password];
		return DatabaseHandler::GetRow($sql,$params);
	}

	public static function getCompanyPasswordHash($email,$password){

		$sql = "SELECT * FROM  job_portal_companies WHERE email_id= ? AND passwordd = ?";
		$params = [$email,$password];
		return DatabaseHandler::GetRow($sql,$params);
	}

	public static function checkWitLogIn($email,$password){

		$sql = "SELECT * FROM  wit_login_details WHERE email_id= ? AND password = ?";
		$params = [$email,$password];
		return DatabaseHandler::GetRow($sql,$params);
	}

	public static function updateCompanyProfile($orgname, $email,$contactPersonName,$designation, $orgaddress,$orgnum,$contact,$alternateemail,$orggstnum,$orgdes,$orgstate,$orgcity,$orgpin,$company_id){

	    $sql = "UPDATE job_portal_companies SET company_name = ?, email_id=?, contact_person_name=?, designation=?, office_address=?, office_no=?, mobile_no=?, alternate_email_address=?, gst_number=?, company_description=?, state=?, city=?, pin_code=? WHERE id=?";
	    $params = [$orgname, $email,$contactPersonName,$designation, $orgaddress,$orgnum,$contact,$alternateemail,$orggstnum,$orgdes,$orgstate,$orgcity,$orgpin,$company_id];
    	return DatabaseHandler::Execute($sql,$params);
  	}

  	 public static function uploadResume($resume_link,$applicant_id){

	    $sql = "UPDATE job_portal_applicant_details SET resume_link='$resume_link'  WHERE applicant_id='$applicant_id'";   
    	return DatabaseHandler::Execute($sql);
  	}

  	public static function checkCandidateForthisJob($job_id,$applicant_id){

		$sql = "SELECT * FROM  job_applicants WHERE job_id=?  AND applicant_id=?";
		$params = [$job_id,$applicant_id];
		return DatabaseHandler::GetRow($sql,$params);
	}
	
	public static function checkCandidateInEvent($email){

		$sql = "SELECT * FROM  event_deligate_registration WHERE email_id=?";
		$params = [$email];
		return DatabaseHandler::GetRow($sql,$params);
	}
	
	public static function checkSponsorCandidateInEvent($email){

		$sql = "SELECT * FROM  event_sponsor_delegate_registration WHERE email_id=?";
		$params = [$email];
		return DatabaseHandler::GetRow($sql,$params);
	}
	
	public static function registerCandidateForEvent($firstName,$lastName,$email,$phoneNo,$organisationName,$designation){
                $sql = "INSERT INTO `event_deligate_registration` ( first_name, last_name, email_id, phone_no, organisation_name, designation) VALUES ( '$firstName', '$lastName', '$email', '$phoneNo', '$organisationName', '$designation')";

    	return DatabaseHandler::Execute($sql);
  	}
  	
  	public static function registerSponsorCandidateForEvent($firstName,$lastName,$email,$phoneNo,$organisationName,$designation){
                $sql = "INSERT INTO `event_sponsor_delegate_registration` ( first_name, last_name, email_id, phone_no, organisation_name, designation) VALUES ( '$firstName', '$lastName', '$email', '$phoneNo', '$organisationName', '$designation')";

    	return DatabaseHandler::Execute($sql);
  	}
  	
  	public static function changeEmployerPassword($company_id,$newPassword){

		$sql = "UPDATE job_portal_companies SET passwordd = ? WHERE id=?";
		$params = [$newPassword,$company_id];
	
		
		return DatabaseHandler::Execute($sql,$params);
	}
	
	
	public static function checkDeligatePaymentStatus($email){
		$sql = "SELECT * FROM event_deligate_registration WHERE email_id='$email'";
		return DatabaseHandler::GetRow($sql);
	}
	
	public static function checkSponsorDeligatePaymentStatus($email){
		$sql = "SELECT * FROM event_sponsor_delegate_registration WHERE email_id='$email'";
		return DatabaseHandler::GetRow($sql);
	}
	public static function witMasterClassesBooking($email,$selectedClassString){

		$sql = "INSERT INTO event_deligate_wait_list  (email,booked_classes) VALUES (?,?)";
		$params = [$email,$selectedClassString];
		return DatabaseHandler::Execute($sql,$params);
	}

	public static function updateCount($class){

		$sql = "UPDATE event_classes_count SET $class=$class+1 WHERE id=1";
		return DatabaseHandler::Execute($sql);
	}
	
	public static function getClassesCount(){
		$sql = "SELECT * FROM event_classes_count";

		return DatabaseHandler::GetAll($sql);
	}

	public static function checkDeligateVlassesBookedStatus($email){
		$sql = "SELECT * FROM event_deligate_class_booking WHERE email='$email'";
		return DatabaseHandler::GetRow($sql);
	}
	
	public static function checkRegisteredSponsorInevent($email){
		$sql = "SELECT * FROM event_sponsors_registration WHERE email_id='$email'";
		return DatabaseHandler::GetRow($sql);
	}
	
	public static function submitSponsorEnqiryFormDetails($firstName,$lastName,$email,$phoneNo,$designation,$organisationName){
                $sql = "INSERT INTO `event_sponsors_registration` ( first_name, last_name, email_id, contact_no,designantion, organisation_name) VALUES ( '$firstName', '$lastName', '$email', '$phoneNo', '$organisationName', '$designation')";

    	return DatabaseHandler::Execute($sql);
  	}
  	
  	public static function submitContactUsData($firstName,$lastName,$email,$contact_no,$companyname,$enquiryreason,$message){
                $sql = "INSERT INTO `contactUs_data` ( first_name, last_name, email_id, contact_no, company_name, reason_for_enqiry, message) VALUES ( '$firstName', '$lastName', '$email', '$contact_no', '$companyname', '$enquiryreason', '$message')";

    	return DatabaseHandler::Execute($sql);
  	}
  	
  	public static function getTotalJobs(){
                $sql = "SELECT * FROM job_post";

    	return DatabaseHandler::GetAll($sql);
  	}
  	
  	public static function getCouponCount($organisationcode){
  	    $sql = "SELECT count FROM delegate_coupons WHERE coupon_code='$organisationcode'";
  	    
  	    return DatabaseHandler::GetRow($sql);
  	}
  	
  	public static function increaseCouponCount($organisationcode){

		$sql = "UPDATE delegate_coupons  SET count=count+1 WHERE coupon_code=?";
		$params=[$organisationcode];
		return DatabaseHandler::Execute($sql,$params);
	}

	public static function getFollowedMentorsList($user_id){

		$sql = "SELECT * FROM mentor_followers
				INNER JOIN users 
				ON mentor_followers.mentor_id = users.id 
				WHERE follower_id= ?";
		$params=[$user_id];
		return DatabaseHandler::GetAll($sql,$params);
	}

	public static function getUnFollowedMentors($user_id){

		$sql = "SELECT users.* FROM users WHERE users.id NOT IN (SELECT mentor_followers.mentor_id FROM mentor_followers WHERE mentor_followers.follower_id=?) AND users.type='Mentor'";
		$params=[$user_id];
		return DatabaseHandler::GetAll($sql,$params);
	}

	
}

?>