<?php

class witAdminLogin{

	public function __construct(){

    if(isset($_POST["witLogin"])){

      $email= $_POST["witemail"];
      $password= $_POST["witpassword"];
      
      $witLogInCheck=catalogOperations::checkWitLogIn($email,$password);
      
      if($witLogInCheck){
	      	$_SESSION['witSession']=$witLogInCheck;
	      	$response  = array('success' => 'true', 'message'=>'Log In Success','redirect_url'=>base_url().'/dashboard');
	      	echo json_encode($response);
	      	exit;
	      }else{
	      	$response  = array('success' => 'fail', 'message'=>'Email or Password is Wrong');
	      	echo json_encode($response);
	      	exit;
	      }
    }

    if(isset($_POST['logOut'])){

			unset($_SESSION['witSession']);
			echo json_encode(1);
			exit;
		}
  
	}
}

?>