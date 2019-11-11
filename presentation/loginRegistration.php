<?php
class loginRegistration{

	public function __construct(){

		

		if(isset($_POST['register'])){

			$firstName= $_POST['firstName'];
			$lastName= $_POST['lastName'];
			$emailSignUp= $_POST['emailSignUp'];
			$phone= $_POST['phone'];
			$gender= $_POST['gender'];
			$type= $_POST['type'];
		
			$password= $_POST['password'];
			$hashPassword =password_hash($password, PASSWORD_DEFAULT);
			$userExist = catalogOperations::checkExistingUser($emailSignUp);
			
			$vkey = sha1(time().$emailSignUp);
			$body = "
			<div
				style='font-family: monospace;font-size: 15px;margin: auto;letter-spacing: 0px !important;border: 2px solid #0909aa;padding: 2rem;'>
				<p style='text-transform:capitalize'>Hi".' '.$firstName.' '.$lastName."</p>
				<p>Thank you for registering with us, please click on the link below to verfy your account.</p>
				<div style='text-align: center; padding:2rem;'>
					<a
							style='color: white;text-decoration:none;letter-spacing: 0.8px;background-color:#0909aa;color:white;padding:0.5rem;border:none;border-radius: 2px;'
							href=".base_url()."/activate/v_key=".$vkey.">Verify Account</a> </div>
							
							<p style='padding:5px 0px 5px 0px;'>For any further queries about login details or errors, please write to us at <a href='info@womenintech.co.in'>info@womenintech.co.in</a> </p>
							</div>";
			
			if($userExist){
				$response=array('success' =>'Fail' , 'message'=> 'User already exists');
				echo json_encode($response);
				exit;
			}else{
				catalogOperations::registerUser($firstName,$lastName,$emailSignUp,$phone,$gender,$type,$hashPassword,$vkey);
				
				$return = sendMail::sendEMail($emailSignUp,$body);
				
				$response=array('success' =>'true' , 'message'=> 'Registration Successful');
				echo json_encode($response);
				exit;
			}
			
		}

		if (isset($_POST['forgotP'])){
			$email = $_POST['email'];
			$reset_key = sha1(time().$email);
			$body = " <div
			style='font-family: monospace;font-size: 15px;margin: auto;letter-spacing: 0px !important;border: 2px solid #0909aa;padding: 3rem;'>
	
			<p style='padding: 1rem;'>Hii".' ' .$email."</p>
			<p style='padding: 1rem;'>Please click on the below Link to Reset your Password</p>
	
			<a href=".base_url()."/reset_password?reset_key=".$reset_key." style='padding: 1rem;'>".base_url().'/'.$reset_key."
			</a>
		</div>";
					$checkUser = catalogOperations::checkExistingUserByEmail($email);
					$userId = $checkUser['id'];
				if($checkUser['id']){
					$queryReturn = catalogOperations::insertResetKey($userId,$reset_key);
					if($queryReturn){
						$return = sendMail::sendPasswordResetEMail($email,$body);
						$response = array('success'=>'true','message' => "An email with password reset link has been sent to the registered email id" );
					echo json_encode($response);
					exit();
					}else{
						$response = array('success'=>'fail','message' => "Some Error Occured" );
					echo json_encode($response) ;
					exit();

					}	
					
				}else{
					$response = array('success'=>'fail','message' => "This email is not registered with us" );
					echo json_encode($response);
					exit();
				}	
		}



		if(isset($_POST['loginUser'])){
			$email= $_POST['email'];
			$password= $_POST['password'];
			$passwordHash = catalogOperations::getUserPasswordHash($email);
			
			if(password_verify($password, $passwordHash)){
				$userDetails = catalogOperations::getUserDetails($email);
				
				
				
				if($userDetails['is_verified']==0){

				$response =  array('status' => 'fail', 'message'=>'Please verify your account by clicking the link sent to your registered email address to proceed further.' );

				
				//var_dump($_SESSION['userDetails']);
			echo json_encode($response);
			exit;
					
				}else{

				$response =  array('success' => 'true', 'message'=>'Login Successful' , 'redirect_url'=>base_url().'/user_dashboard');
				echo json_encode($response);

				$_SESSION['userDetails'] = $userDetails;
				exit;
				}

			}else{

				$response =  array('success' => 'fail', 'message'=>'Invalid username or password' );
				echo json_encode($response);
				exit;
			}
			exit();
		}

		if(isset($_POST['logOut'])){

			unset($_SESSION['userDetails']);
			echo json_encode(1);
			exit;
		}

		





	}
}



?>
