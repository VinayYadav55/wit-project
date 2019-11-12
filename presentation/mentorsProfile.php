<?php

//upload.php
class mentorsProfile{
  public $mentorData;
  public function __construct(){
    if(isset($_GET["mentors_detailed_profile"])){
      $mentorId = $_GET['mentors_id'];
      $getMentorProfile = catalogOperations::getMentorData($mentorId);
      $this->mentorData = $getMentorProfile;
    }
    if(isset($_POST["followmentorsProfile"])){
      
      $followUserId= $_POST['user_id'];
			$followMentorId= $_POST['mentor_id'];
      $followMentorbyMentee = catalogOperations::followMentor($followUserId,$followMentorId);
      // $this->mentorData = $getMentorProfile;
     
				$response=array('success' =>'true' , 'message'=> 'You have followed Successful');
				echo json_encode($response);
				exit;
			}

      if(isset($_GET['accept_follow_request'])){
        $mentor_id = $_POST['mentor_id'];
        $follwer_id = $_POST['follwer_id'];

        $accept_request = catalogOperations::approveFollowerRequest($mentor_id,$follwer_id); 
      }
  }
}


?>