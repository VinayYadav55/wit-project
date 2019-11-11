<?php
  
 
  class mentors{
  	public $mentors;
  	public function __construct(){
  		if(isset($_GET['mentors'])){

  			$getAllMentors = catalogOperations::getAllMentorsList();
  			$this->mentors=$getAllMentors;
  			
  		}
  		if(isset($_POST['approveButton'])){
  			$mentorId = $_POST['mentorId'];
  			$changeMentorStatus = catalogOperations::changeMentorStatus($mentorId);
  			if($changeMentorStatus){
  				$response = array('success' =>'true' , 'message'=>'Mentor approved successfully');
  				echo json_encode($response);
  			    exit;
  			}else{
  				$response = array('success' =>'fail' , 'message'=>'Some error occured.Please try later');
  				echo json_encode($response);
  			    exit;
  			}
  			
  		}
  	}
  }

?>