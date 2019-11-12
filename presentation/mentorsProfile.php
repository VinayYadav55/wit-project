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
  }
}


?>