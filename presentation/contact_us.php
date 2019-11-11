<?php

class contactUs{

	public function __construct(){
            if(isset($_POST["contactus"])){
                  $firstName = $_POST['fname'];
                  $lastName = $_POST['lname'];
                  $email = $_POST['email'];
                  $contact_no = $_POST['contact'];
                  $companyname = $_POST['companyname'];
                  $enquiryreason = $_POST['enquiryreason'];
                  $message = $_POST['message'];
                  
                  /*var_dump($applicantId,$preferCity,$preferJobType,$functionalArea,$IndustryType,$experience,$hometown,$highschoolrecord,$highersecondaryrecord,$graduationrecord,$postgraduationrecord,$otherEducation,$employeeskills,$project1,$project2,$project3,$currentWorkingStatus,$current_company,$current_salary,$current_designation,$current_company_joinee_date,$current_job_description,$previousjob1record,$previousjob2record,$previousjob3record,$contactPhone,$contactEmail,$dob,$maritalstatus,$permanentAddress,$addressPINCode);*/
                  $submitQuery = catalogOperations::submitContactUsData($firstName,$lastName,$email,$contact_no,$companyname,$enquiryreason,$message);
                  
                  
                      $response = array('success'=>'true', 'message'=>'Thanks for connecting with us.A representative from WiT team will get in touch with you shortly.For any further queries,please reach out to us at info@womenintech.co.in');
                    echo json_encode($response);
                    exit;
                  
            }
            }
  
	}


?>