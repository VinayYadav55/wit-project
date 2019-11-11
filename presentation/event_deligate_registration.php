<?php

class eventDeligateRegistration{

	public function __construct(){
		
		if(isset($_POST['eventRegistrationCandidate'])){
		   
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$organisationName = $_POST['organisationName'];
			$designation = $_POST['designation'];
			$email = $_POST['email'];
			$phoneNo = $_POST['phoneNo'];
			$checkRegisteredCandiadteInevent = catalogOperations::checkCandidateInEvent($email);
			if($checkRegisteredCandiadteInevent){
				$response = array('success' => 'fail', 'message'=>'You have already registered for this event' );
				echo json_encode($response);
				exit;

			}else{
				
				$registerCandidate = catalogOperations::registerCandidateForEvent($firstName,$lastName,$email,$phoneNo,$organisationName,$designation);

				$response = array('success' => 'true', 'message'=>'Your registration is successful. You will be redirected to payment page');
				
				
                
				echo json_encode($response);
				
				exit;
			}
			


	}
	if(isset($_POST['eventRegistrationSponsor'])){
		   
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$organisationName = $_POST['organisationName'];
			$designation = $_POST['designation'];
			$email = $_POST['email'];
			$phoneNo = $_POST['phoneNo'];
			$organisationcode = $_POST['organisationcode'];
			$organisationcode = trim($organisationcode);
			
			$checkRegisteredCandiadteInevent = catalogOperations::checkSponsorCandidateInEvent($email);
			if($checkRegisteredCandiadteInevent){
				$response = array('success' => 'fail', 'message'=>'You have already registered for this event' );
				echo json_encode($response);
				exit;

			}else{
			   
				$couponForTwo = array('EBC6P', '4G0PH', 'VBH0I', '1OLEV', '7F8DC', '5LJXF', 'QCF3R', '9HPH5', 'MRBKV', '8YN1E');
				$couponForFive = array('G7LDQ', 'RZE35', '4FBJ7', 'QMX7F', 'FGKER', 'ROZC8', 'OUWYV', 'H08IA', 'ZUF67', 'YSSFR','ZKVBN' ,'W4LVY', 'S44WL', '0YNLW', 'OIA41','0SYGN', 'D0L0N', '78J7V', 'TPGUI', 'CGYR3');

$couponForTen = array('XZ853', 'PAUP2', '5LZ9K', 'RV57B', '7KZH6', 'JY5EL', 'WIQAC', 'TAQ1D', 'KC6CZ', 'ZRZV5', '8VXDQ', 'CI7OL', '2P2EJ', '56FY7', 'IGE5S', 'W8DKJ', 'X6I40', 'WA8RT', '0P5XA', 'DZ6IJ','58JEZ','0T39Z', 'PJCIT', '6QYBZ', 'TQ8TW', 'A33I7', 'ZOE45', 'QK1IB', '68TBJ', '52F4W');


$couponForFifteen = array('9579H', 'CWGVG', 'VDDN0', 'LMN27', 'OCBCZ', '24V9Z', '9AYFB', 'MGYWU', 'APYY9', 'ST099');
$couponForTwenty = array('JPBTQ', 'LJRU5', 'HY17A', '55AE6', 'K6KA9', 'R98Z5','6X7BS', 'YJEJQ', '91NO7', 'FMB5A');

$couponForTwentyFive = array('GPQP1', '5OICV', '1LZTL', 'ASMTU', 'L4AK8', 'EGM6H', 'QZP8R', 'GD8Q4', 'LN8Q2', 'UYDGJ');
$couponForThirty = array('K3M09', '36U29', 'GFX5E', 'IUGT6', '3YPQH', 'KVNU1', 'GWR3K', 'MX8F8', 'IF3DN', 'AJW6A');

$couponForFifty = array('QNEJQ', 'AT400','AVGuest');
$couponForToday = array('FYE2D');
$couponForHundered = array('I0VPQ', '16JXE', 'XOH3V','ANMLE','5O5WW','H95H4','2J1RN','AEP9Q','7EVTP', '2R3UK', 'HWS2F', '7C1VT', '7EX8X');
				
				if(in_array($organisationcode,$couponForTwo)){
				    $getCouponCount = catalogOperations::getCouponCount($organisationcode);
				    if($getCouponCount['count']<2){
				        
				        $registerCandidate = catalogOperations::registerSponsorCandidateForEvent($firstName,$lastName,$email,$phoneNo,$organisationName,$designation,$organisationcode);
				        $increaseCouponCount = catalogOperations::increaseCouponCount($organisationcode);
				        $response = array('success' => 'true', 'message'=>'Your registration is successful. You will be redirected to payment page');
				        echo json_encode($response);
				        $body="<div
    style='padding: 0; margin:0; font-size: 1rem;font-family: Arial, Helvetica, sans-serif; max-width: 100%; height: auto;text-align: center;'>
    <img src='http://womenintech.co.in/images/wit_growth_summit_2019_sponsors_delegate_registration.png' style='max-width: 100%;height: auto;' >
    <div>
      <h1 style='color: #E43264;padding-top: 2rem;'>Thank You!</h1>
      <p style='line-height: 1.5rem;font-weight: 600;word-spacing: 0.1rem;color: black;'>Congratulations! You have successfully availed your complimentary pass for
        <br>
        WiT Growth Summit being held at The Leela, Gurugram on 16th Oct ,2019 (9am to 6pm).
      </p>
    </div>
  </div>";
				        sendMail::classBooked($email,$body);
				        exit;
				        
				    }else{
				        $response = array('success' => 'fail', 'message'=>'All complementary passes has been availed');
				        echo json_encode($response);
				        exit;
				    }
				}elseif(in_array($organisationcode,$couponForFive)){
				    $getCouponCount = catalogOperations::getCouponCount($organisationcode);
				    if($getCouponCount['count']<5){
				        
				        $registerCandidate = catalogOperations::registerSponsorCandidateForEvent($firstName,$lastName,$email,$phoneNo,$organisationName,$designation,$organisationcode);
				        $increaseCouponCount = catalogOperations::increaseCouponCount($organisationcode);
				        $response = array('success' => 'true', 'message'=>'Your registration is successful. You will be redirected to payment page');
				        echo json_encode($response);
				        $body="<div
    style='padding: 0; margin:0; font-size: 1rem;font-family: Arial, Helvetica, sans-serif; max-width: 100%; height: auto;text-align: center;'>
    <img src='http://womenintech.co.in/images/wit_growth_summit_2019_sponsors_delegate_registration.png' style='max-width: 100%;height: auto;' >
    <div>
      <h1 style='color: #E43264;padding-top: 2rem;'>Thank You!</h1>
      <p style='line-height: 1.5rem;font-weight: 600;word-spacing: 0.1rem;color: black;'>Congratulations! You have successfully availed your complimentary pass for
        <br>
        WiT Growth Summit being held at The Leela, Gurugram on 16th Oct ,2019 (9am to 6pm).
      </p>
    </div>
  </div>";
				        sendMail::classBooked($email,$body);
				        exit;
				        
				    }else{
				        $response = array('success' => 'fail', 'message'=>'All complementary passes has been availed');
				        echo json_encode($response);
				        exit;
				    }
				}elseif(in_array($organisationcode,$couponForToday)){
				    $getCouponCount = catalogOperations::getCouponCount($organisationcode);
				    if($getCouponCount['count']<50){
				        
				        $registerCandidate = catalogOperations::registerSponsorCandidateForEvent($firstName,$lastName,$email,$phoneNo,$organisationName,$designation,$organisationcode);
				        $increaseCouponCount = catalogOperations::increaseCouponCount($organisationcode);
				        $response = array('success' => 'true', 'message'=>'Your registration is successful. You will be redirected to payment page');
				        echo json_encode($response);
				        $body="<div
    style='padding: 0; margin:0; font-size: 1rem;font-family: Arial, Helvetica, sans-serif; max-width: 100%; height: auto;text-align: center;'>
    <img src='http://womenintech.co.in/images/wit_growth_summit_2019_sponsors_delegate_registration.png' style='max-width: 100%;height: auto;' >
    <div>
      <h1 style='color: #E43264;padding-top: 2rem;'>Thank You!</h1>
      <p style='line-height: 1.5rem;font-weight: 600;word-spacing: 0.1rem;color: black;'>Congratulations! You have successfully availed your complimentary pass for
        <br>
        WiT Growth Summit being held at The Leela, Gurugram on 16th Oct ,2019 (9am to 6pm).
      </p>
    </div>
  </div>";
				        sendMail::classBooked($email,$body);
				        exit;
				        
				    }else{
				        $response = array('success' => 'fail', 'message'=>'All complementary passes has been availed');
				        echo json_encode($response);
				        exit;
				    }
				}elseif(in_array($organisationcode,$couponForTen)){
				        
				        $getCouponCount = catalogOperations::getCouponCount($organisationcode);
				    if($getCouponCount['count']<10){
				        
				        $registerCandidate = catalogOperations::registerSponsorCandidateForEvent($firstName,$lastName,$email,$phoneNo,$organisationName,$designation,$organisationcode);
				        $increaseCouponCount = catalogOperations::increaseCouponCount($organisationcode);
				        $response = array('success' => 'true', 'message'=>'Your registration is successful. You will be redirected to payment page');
				        echo json_encode($response);
				        $body="<div
    style='padding: 0; margin:0; font-size: 1rem;font-family: Arial, Helvetica, sans-serif; max-width: 100%; height: auto;text-align: center;'>
    <img src='http://womenintech.co.in/images/wit_growth_summit_2019_sponsors_delegate_registration.png' style='max-width: 100%;height: auto;' >
    <div>
      <h1 style='color: #E43264;padding-top: 2rem;'>Thank You!</h1>
      <p style='line-height: 1.5rem;font-weight: 600;word-spacing: 0.1rem;color: black;'>Congratulations! You have successfully availed your complimentary pass for
        <br>
        WiT Growth Summit being held at The Leela, Gurugram on 16th Oct ,2019 (9am to 6pm).
      </p>
    </div>
  </div>";
				        sendMail::classBooked($email,$body);
				        exit;
				        
				    }else{
				        $response = array('success' => 'fail', 'message'=>'All complementary passes has been availed');
				        echo json_encode($response);
				        exit;
				    }
				        
				    }elseif(in_array($organisationcode,$couponForFifteen)){
				        
				        $getCouponCount = catalogOperations::getCouponCount($organisationcode);
				    if($getCouponCount['count']<15){
				        
				        $registerCandidate = catalogOperations::registerSponsorCandidateForEvent($firstName,$lastName,$email,$phoneNo,$organisationName,$designation,$organisationcode);
				        $increaseCouponCount = catalogOperations::increaseCouponCount($organisationcode);
				        $response = array('success' => 'true', 'message'=>'Your registration is successful. You will be redirected to payment page');
				        echo json_encode($response);
				        exit;
				        
				    }else{
				        $response = array('success' => 'fail', 'message'=>'This coupon code is not valid');
				        echo json_encode($response);
				        $body="<div
    style='padding: 0; margin:0; font-size: 1rem;font-family: Arial, Helvetica, sans-serif; max-width: 100%; height: auto;text-align: center;'>
    <img src='http://womenintech.co.in/images/wit_growth_summit_2019_sponsors_delegate_registration.png' style='max-width: 100%;height: auto;' >
    <div>
      <h1 style='color: #E43264;padding-top: 2rem;'>Thank You!</h1>
      <p style='line-height: 1.5rem;font-weight: 600;word-spacing: 0.1rem;color: black;'>Congratulations! You have successfully availed your complimentary pass for
        <br>
        WiT Growth Summit being held at The Leela, Gurugram on 16th Oct ,2019 (9am to 6pm).
      </p>
    </div>
  </div>";
				        sendMail::classBooked($email,$body);
				        exit;
				    }
				        
				    }elseif(in_array($organisationcode,$couponForTwenty)){
				        
				        $getCouponCount = catalogOperations::getCouponCount($organisationcode);
				    
				    if($getCouponCount['count']<20){
				        
				        $registerCandidate = catalogOperations::registerSponsorCandidateForEvent($firstName,$lastName,$email,$phoneNo,$organisationName,$designation,$organisationcode);
				        $increaseCouponCount = catalogOperations::increaseCouponCount($organisationcode);
				        $response = array('success' => 'true', 'message'=>'Your registration is successful. You will be redirected to payment page');
				        echo json_encode($response);
				        exit;
				        
				    }else{
				        $response = array('success' => 'fail', 'message'=>'This coupon code is not valid');
				        echo json_encode($response);
				        $body="<div
    style='padding: 0; margin:0; font-size: 1rem;font-family: Arial, Helvetica, sans-serif; max-width: 100%; height: auto;text-align: center;'>
    <img src='http://womenintech.co.in/images/wit_growth_summit_2019_sponsors_delegate_registration.png' style='max-width: 100%;height: auto;' >
    <div>
      <h1 style='color: #E43264;padding-top: 2rem;'>Thank You!</h1>
      <p style='line-height: 1.5rem;font-weight: 600;word-spacing: 0.1rem;color: black;'>Congratulations! You have successfully availed your complimentary pass for
        <br>
        WiT Growth Summit being held at The Leela, Gurugram on 16th Oct ,2019 (9am to 6pm).
      </p>
    </div>
  </div>";
				        sendMail::classBooked($email,$body);
				        exit;
				    }
				        
				    }elseif(in_array($organisationcode,$couponForTwentyFive)){
				        
				        $getCouponCount = catalogOperations::getCouponCount($organisationcode);
				
				    if($getCouponCount['count']<25){
				        
				        $registerCandidate = catalogOperations::registerSponsorCandidateForEvent($firstName,$lastName,$email,$phoneNo,$organisationName,$designation,$organisationcode);
				        $increaseCouponCount = catalogOperations::increaseCouponCount($organisationcode);
				        $response = array('success' => 'true', 'message'=>'Your registration is successful. You will be redirected to payment page');
				        echo json_encode($response);
				        $body="<div
    style='padding: 0; margin:0; font-size: 1rem;font-family: Arial, Helvetica, sans-serif; max-width: 100%; height: auto;text-align: center;'>
    <img src='http://womenintech.co.in/images/wit_growth_summit_2019_sponsors_delegate_registration.png' style='max-width: 100%;height: auto;' >
    <div>
      <h1 style='color: #E43264;padding-top: 2rem;'>Thank You!</h1>
      <p style='line-height: 1.5rem;font-weight: 600;word-spacing: 0.1rem;color: black;'>Congratulations! You have successfully availed your complimentary pass for
        <br>
        WiT Growth Summit being held at The Leela, Gurugram on 16th Oct ,2019 (9am to 6pm).
      </p>
    </div>
  </div>";
				        sendMail::classBooked($email,$body);
				        exit;
				        
				    }else{
				        $response = array('success' => 'fail', 'message'=>'All complementary passes has been availed');
				        echo json_encode($response);
				        exit;
				    }
				    }elseif(in_array($organisationcode,$couponForThirty)){
				        $getCouponCount = catalogOperations::getCouponCount($organisationcode);
				    if($getCouponCount['count']<30){
				        
				        $registerCandidate = catalogOperations::registerSponsorCandidateForEvent($firstName,$lastName,$email,$phoneNo,$organisationName,$designation,$organisationcode);
				        $increaseCouponCount = catalogOperations::increaseCouponCount($organisationcode);
				        $response = array('success' => 'true', 'message'=>'Your registration is successful. You will be redirected to payment page');
				        echo json_encode($response);
				        $body="<div
    style='padding: 0; margin:0; font-size: 1rem;font-family: Arial, Helvetica, sans-serif; max-width: 100%; height: auto;text-align: center;'>
    <img src='http://womenintech.co.in/images/wit_growth_summit_2019_sponsors_delegate_registration.png' style='max-width: 100%;height: auto;' >
    <div>
      <h1 style='color: #E43264;padding-top: 2rem;'>Thank You!</h1>
      <p style='line-height: 1.5rem;font-weight: 600;word-spacing: 0.1rem;color: black;'>Congratulations! You have successfully availed your complimentary pass for
        <br>
        WiT Growth Summit being held at The Leela, Gurugram on 16th Oct ,2019 (9am to 6pm).
      </p>
    </div>
  </div>";
				        sendMail::classBooked($email,$body);
				        exit;
				        
				    }else{
				        $response = array('success' => 'fail', 'message'=>'All complementary passes has been availed');
				        echo json_encode($response);
				        exit;
				    }
				    }elseif(in_array($organisationcode,$couponForFifty)){
				        $getCouponCount = catalogOperations::getCouponCount($organisationcode);
				    if($getCouponCount['count']<50){
				        
				        $registerCandidate = catalogOperations::registerSponsorCandidateForEvent($firstName,$lastName,$email,$phoneNo,$organisationName,$designation,$organisationcode);
				        $increaseCouponCount = catalogOperations::increaseCouponCount($organisationcode);
				        $response = array('success' => 'true', 'message'=>'Your registration is successful. You will be redirected to payment page');
				        echo json_encode($response);
				        sendMail::classBooked($email,$body);
				        exit;
				        
				    }else{
				        $response = array('success' => 'fail', 'message'=>'All complementary passes has been availed');
				        echo json_encode($response);
				        exit;
				    }
				    }elseif(in_array($organisationcode,$couponForHundered)){
				        $getCouponCount = catalogOperations::getCouponCount($organisationcode);
				    if($getCouponCount['count']<100){
				        
				        $registerCandidate = catalogOperations::registerSponsorCandidateForEvent($firstName,$lastName,$email,$phoneNo,$organisationName,$designation,$organisationcode);
				        $increaseCouponCount = catalogOperations::increaseCouponCount($organisationcode);
				        $response = array('success' => 'true', 'message'=>'Your registration is successful. You will be redirected to payment page');
				        echo json_encode($response);
				        $body="<div
    style='padding: 0; margin:0; font-size: 1rem;font-family: Arial, Helvetica, sans-serif; max-width: 100%; height: auto;text-align: center;'>
    <img src='http://womenintech.co.in/images/wit_growth_summit_2019_sponsors_delegate_registration.png' style='max-width: 100%;height: auto;' >
    <div>
      <h1 style='color: #E43264;padding-top: 2rem;'>Thank You!</h1>
      <p style='line-height: 1.5rem;font-weight: 600;word-spacing: 0.1rem;color: black;'>Congratulations! You have successfully availed your complimentary pass for
        <br>
        WiT Growth Summit being held at The Leela, Gurugram on 16th Oct ,2019 (9am to 6pm).
      </p>
    </div>
  </div>";
				        sendMail::classBooked($email,$body);
				        exit;
				        
				    }else{
				        $response = array('success' => 'fail', 'message'=>'All complementary passes has been availed');
				        echo json_encode($response);
				        exit;
				    }
				    }else{
				    $response = array('success' => 'fail', 'message'=>'All complementary passes has been availed');
				        echo json_encode($response);
				        exit;
				}
			}
				
				
				
				
				
			


	}
	
	if(isset($_POST['sponsorsEventRegistration'])){
		 
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$organisationName = $_POST['organisationName'];
			$designation = $_POST['designation'];
			$email = $_POST['email'];
			$phoneNo = $_POST['phoneNo'];
			$checkRegisteredSponsorInevent = catalogOperations::checkRegisteredSponsorInevent($email);
			if($checkRegisteredSponsorInevent){
			   
				$response = array('success' => 'fail', 'message'=>'We have already recieved your details.' );
				echo json_encode($response);
				exit;

			}else{
			
				$submitSponsorEnqiryFormDetails = catalogOperations::submitSponsorEnqiryFormDetails($firstName,$lastName,$email,$phoneNo,$designation,$organisationName);

				$response = array('success' => 'true', 'message'=>'Thank You for your interest.');
                if($submitSponsorEnqiryFormDetails){
			    $emailId = 'info@womenintech.co.in';
			    $body ="<div
			style='font-family: monospace;font-size: 15px;margin: auto;letter-spacing: 0px !important;border: 2px solid #0909aa;padding: 3rem;'>
	
			<p style='padding: 1rem;'>Hii</p>
			<p style='padding: 1rem;'>".$organisationName." enquiry for the event sponsor.Below are the full details about the company</p>
	        <p style='padding: 1rem;'>Contact Person:".$firstName.' '.$lastName."</p>
	        <p style='padding: 1rem;'>Email : ".$email."</p>
	        <p style='padding: 1rem;'>Contact No: ".$phoneNo."</p>
	        <p style='padding: 1rem;'>Organisation Name: ".$organisationName."</p>
	        <p style='padding: 1rem;'>Designation: ".$designation."</p>
		</div>";
			    sendMail::sponsorEnquiryMail($emailId,$body);
			}
				echo json_encode($response);
				exit;
			}
			
			
			


	}
}
}

?>