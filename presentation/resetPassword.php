<?php
class resetPassword{

	public function __construct(){

		
		if(isset($_GET['reset_password'])){
			if(isset($_POST['resetP'])){
				$email= $_POST['email'];
				$password= $_POST['password'];
				$reset_key = $_POST['resetKey'];

				$hashPassword =password_hash($password, PASSWORD_DEFAULT);
				$allDetails = catalogOperations::checkExistingUser($email);
				if($allDetails){
					$password_reset_key = $allDetails['password_reset_key'];
						
					if($reset_key==$password_reset_key){

						$queryReturn =catalogOperations::resetPassword($email,$hashPassword);
						if($queryReturn){
							$response = array('success'=>'true', 'message'=>'Password changed successfully. Please login with new password');
							echo json_encode($response);
							exit;
						}else{
							$response = array('success'=>'fail', 'message'=>'Some Error Occured Please Try Again Later');
							echo json_encode($response);
							exit;
						}
					}else{
						$response = array('success'=>'fail', 'message'=>'Some Error Occured Please Try Again Later');
						echo json_encode($response);
						exit;
					}
				}else{
					$response = array('success'=>'fail', 'message'=>'Please enter registered email Id');

						echo json_encode($response);
						exit;
				}
			
		}
			
		}
		

		



	}
}



?>
