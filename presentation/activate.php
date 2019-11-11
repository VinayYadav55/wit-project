<?php


class activate{
	public $message;
	public  function __construct(){

		if (isset($_GET['v_key'])){
			$v_key = $_GET['v_key'];

			$allDetails = catalogOperations::checkVerificationKey($v_key);
				if($allDetails){
					$email = $allDetails['email_id'];
					catalogOperations::changeVerificationStatus($email);
					$this->message="Account Verified";
				}else{
					$this->message="Account already verified";
				}
			
		}else{
			$this->message="No Account Registered With This Email";
		}

		
	}
}
?>