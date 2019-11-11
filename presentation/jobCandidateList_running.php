<?php
 	class jobCandidateList{
 		public $candidateList=[];
 		public $applicantDetails; 
 		public function __construct(){
 			if(isset($_GET['job_application'])||isset($_GET['vipanan_view_company_job_applicant_list'])||isset($_GET['job_applicants'])){
 				$job_id = $_GET['job_id'];

				 $allCandidateList = catalogOperations::getAppliedCandidateList($job_id); 
 				foreach ($allCandidateList as $candidateDetail) {
 					$post_grad_details = $candidateDetail['post_graduation_details'];
 					$post_grad_details= explode(',',$post_grad_details);
 					$grad_details = explode(',',$graduation_Details);
 					$candidateDetail['graduation_details'] = array('collegeName' => $grad_details[0], 'course' => $grad_details[1],'Specilization' => $grad_details[2],'Year_of_Complition' => $grad_details[3],'Percentage/ CGPA/ GPA' => $grad_details[4]);
 				$candidateDetail['post_graduation_details']= array('collegeName' => $post_grad_details[0], 'course' => $post_grad_details[1],'Specilization' => $post_grad_details[2],'Year_of_Complition' => $post_grad_details[3],'Percentage/ CGPA/ GPA' => $post_grad_details[4]);
 				array_push($this->candidateList,$candidateDetail);

 				}
			}
			if(isset($_GET['job_application_full_details'])||isset($_GET['candidate_profile'])||isset($_GET['applicant_profile'])||isset($_GET['user_view_profile'])||isset($_GET['user_edit_profile'])){
				if($_GET['candidate_id']){
					$applicant_id = $_GET['candidate_id'];	
				}else{
					$applicant_id = $_SESSION['userDetails']['id'];
				}
			
			
				$candidateDetails = catalogOperations::getCandidateFullDetail($applicant_id);

				foreach ($candidateDetails as $candidate) {
				
					$skills = $candidate['skill_set'];
					$skills =explode(',', $skills);
					$candidate['skill_set_array']=$skills;

					$prefered_city = $candidate['prefered_city'];

					$prefered_city =explode(',', $prefered_city);
					$candidate['prefered_city_array']=$prefered_city;

					$prefered_job_types = $candidate['prefered_job_types'];
					$prefered_job_types =explode(',', $prefered_job_types);
					$candidate['prefered_job_types_array']=$prefered_job_types;

					$functional_area = $candidate['functional_area'];
					$functional_area =explode(',', $functional_area);
					$candidate['functional_area_array']=$functional_area;


					$industry_type = $candidate['industry_type'];
					$industry_type =explode(',', $industry_type);
					$candidate['industry_type_array']=$industry_type;


					$experience = $candidate['experience'];
					$experience =explode(',', $experience);
					$candidate['experience_array']=$experience;


					$high_school_details = $candidate['10th_class_details'];
 					$high_school_details= explode(',',$high_school_details);
 				$high_school_details_array= array('class'=>'X(Secondary)','BoardName' => $high_school_details[0], 'schoolName' => $high_school_details[1],'passingYear' => $high_school_details[2],'percentage' => $high_school_details[3]);
 				

 				$secondary_school_details = $candidate['12th_class_details'];
 					$secondary_school_details= explode(',',$secondary_school_details);
 				$secondary_school_details_array= array('class'=>'XII(Senior Secondary)', 'BoardName' => $secondary_school_details[0], 'schoolName' => $secondary_school_details[1],'passingYear' => $secondary_school_details[2],'percentage' => $secondary_school_details[3]);

 				$grad_details = $candidate['graduation_details'];
 					$grad_details= explode(',',$grad_details);
 				$grad_details_array= array('collegeName' => $grad_details[0], 'course' => $grad_details[1],'Specilization' => $grad_details[2],'Year_of_Complition' => $grad_details[3],'percentage' => $grad_details[4]);

 				$post_grad_details = $candidate['post_graduation_details'];
 					$post_grad_details= explode(',',$post_grad_details);
 				$post_grad_details_array= array('collegeName' => $post_grad_details[0], 'course' => $post_grad_details[1],'Specilization' => $post_grad_details[2],'Year_of_Complition' => $post_grad_details[3],'percentage' => $post_grad_details[4]);

 				$other_grad_details = $candidate['additional_education_details'];
 					$other_grad_details= explode(',',$other_grad_details);
 				$other_grad_details_array= array('collegeName' => $other_grad_details[0], 'course' => $other_grad_details[1],'Specilization' => $other_grad_details[2],'Year_of_Complition' => $other_grad_details[3],'percentage' => $other_grad_details[4]);
 					
 					$educationDetails = array($high_school_details_array,  $secondary_school_details_array, $grad_details_array, $post_grad_details_array,$other_grad_details_array);
 					//var_dump($educationDetails);
 					$candidate['educationDetails']=$educationDetails;



 					////////////////////////////////////////////////////////////////
 					$previous_project1_details = $candidate['previous_project1_details'];
					 $previous_project1_details= explode(',',$previous_project1_details);
					 
 				$previous_project1_details_array= array('project_title'=>$previous_project1_details[0],'project_description' => $previous_project1_details[1], 'year_of_completion' => $previous_project1_details[2]);
 				$previous_project2_details = $candidate['previous_project2_details'];
 					$previous_project2_details= explode(',',$previous_project2_details);
 				$previous_project2_details_array= array('project_title'=>$previous_project2_details[0],'project_description' => $previous_project2_details[1], 'year_of_completion' => $previous_project2_details[2]);

 				$previous_project3_details = $candidate['previous_project3_details'];
 					$previous_project3_details= explode(',',$previous_project3_details);
 				$previous_project3_details_array= array('project_title'=>$previous_project3_details[0],'project_description' => $previous_project3_details[1], 'year_of_completion' => $previous_project3_details[2]);
 				

 				$projectDetails = array($previous_project1_details_array,  $previous_project2_details_array, $previous_project3_details_array);

 				$candidate['projectDetails']=$projectDetails;


 				///////////////////////////////////////////////////////////////////////

 				$previous_job1 = $candidate['previous_job1'];
 					$previous_job1= explode(',',$previous_job1);
 				$previous_job1_array= array('designantion'=>$previous_job1[0],'organization' => $previous_job1[1], 'join_date' => $previous_job1[2], 'end_date'=> $previous_job1[3],'description'=>$previous_job1[4]);
 					
 				$previous_job2 = $candidate['previous_job2'];
 					$previous_job2= explode(',',$previous_job2);
 				$previous_job2_array= array('designantion'=>$previous_job2[0],'organization' => $previous_job2[1], 'join_date' => $previous_job2[2], 'end_date'=> $previous_job2[3],'description'=>$previous_job2[4]);
 				
 				$previous_job3 = $candidate['previous_job3'];
 					$previous_job3= explode(',',$previous_job3);
 				$previous_job3_array= array('designantion'=>$previous_job3[0],'organization' => $previous_job3[1], 'join_date' => $previous_job3[2], 'end_date'=> $previous_job3[3],'description'=>$previous_job3[4]);	

 				$previousJobDetails = array($previous_job1_array,  $previous_job2_array, $previous_job3_array);
 				$candidate['previousJobDetails']=$previousJobDetails;
 				
 				$this->applicantDetails=$candidate;
					
				}
				
				if(isset($_GET["file_name"])){
					 // Get parameters
					 $file = urldecode($_GET["file_name"]); // Decode URL-encoded string
					 $filepath =$file;
					 
					 // Process download
					 if(file_exists($filepath)) {
					    
							 header('Content-Description: File Transfer');
							 header('Content-Type: application/octet-stream');
							 header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
							 header('Expires: 0');
							 header('Cache-Control: must-revalidate');
							 header('Pragma: public');
							 header('Content-Length: ' . filesize($filepath));
							 flush(); // Flush system output buffer
							 readfile($filepath);
							 exit;
					 }
				}
			}

			//  *********Resume Download Code*************

			
			//var_dump($this->applicantDetails);

 		}
		
	}

?>