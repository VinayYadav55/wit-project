<?php
  
class eventMasterRegister{
  public $classesTotalCount;
  public function __construct(){
    if(isset($_GET["witmasterclass"]) || isset($_GET["eventclassBooking"])){
      $getClassesCount=catalogOperations::getClassesCount();
      $this->classesTotalCount=$getClassesCount;
    }
   
    if(isset($_POST["masterClassRegister"])){
      $email= $_POST["email"];
      if(!$_POST['selectedClass']){
          
          $checkDeligatePaymentStatus=catalogOperations::checkDeligatePaymentStatus($email);
          if($checkDeligatePaymentStatus){
              $body="<div style='padding: 0; margin:0; font-size: 1rem;font-family: Arial, Helvetica, sans-serif; max-width: 100%; height: auto;'>
                        <div style='text-align: center;'>
                            <img src='http://womenintech.co.in/images/picone.png' style='max-width: 100%; height:auto;'>
                        </div>
                        <div style='text-align: center;'>
                                <h1 style='text-align: center; padding:10px;'>Thank You !</h1>
                                <a href='http://womenintech.co.in/wit_growth_summit_2019' style='text-align: center;'>Your registration for WiT Growth Summit being held at The Leela, Gurugram on 16th Oct ,2019 (9am to 6pm), has been successfully completed.</a>
                                <p style='text-align: center; padding: 1rem 2rem;line-height: 1.3rem;'>WomenInTech Growth Summit 2019 will witness a squadron of the most celebrated STEM industry professionals on stage.<br>
                                <a href='http://womenintech.co.in/wit_growth_summit_2019'> Click here</a> to find out more about the event and download the agenda.<br> For any further queries, please reach out to us at <a href='https://mail.google.com/mail/?view=cm&fs=1&to=info@womenintech.co.in' target='_blank'> info@womenintech.co.in</a></p>
                        </div>
                <div style='text-align: center;'>
                <img src='http://womenintech.co.in/images/picthree.png' style='max-width: 100%; height:auto;'>
                </div>
                <div style='text-align: center;'>
                <img src='http://womenintech.co.in/images/pictwo.png' style='max-width: 100%; height:auto;'>
                </div>
                </div>";
                
                $response = array('success'=>'true', 'message'=>'Your registration for wit growth summit is  succesful');
        
                sendMail::classBooked($email,$body);
                echo json_encode($response);
                exit;
          }else{
              
              $response = array('success'=>'fail', 'message'=>'Please register yourself for the event before booking classes');
          echo json_encode($response);
          exit;
              
          }
          
      }else{
          
          $selectedClass= $_POST["selectedClass"];
      $tempName = $_POST['tempName'];
      
     
         
          $checkSponsorDeligatePaymentStatus=catalogOperations::checkSponsorDeligatePaymentStatus($email);
     
          $checkDeligatePaymentStatus=catalogOperations::checkDeligatePaymentStatus($email);
      
      

      

      $checkDeligateVlassesBookedStatus=catalogOperations::checkDeligateVlassesBookedStatus($email);

      if($checkDeligateVlassesBookedStatus){
        $response = array('success'=>'fail', 'message'=>'You already booked classes');
          echo json_encode($response);
          exit;
      }else{

        if($checkDeligatePaymentStatus||$checkSponsorDeligatePaymentStatus){
       
          $selectedClassString=implode(',',$selectedClass);
          $witMasterClassesBooking=catalogOperations::witMasterClassesBooking($email,$selectedClassString);
  
          if($witMasterClassesBooking){
              foreach($tempName as $class){
                $updateCount=catalogOperations::updateCount($class);
              }
            $response = array('success'=>'true', 'message'=>'Classes booked succesfully');
            
                $body="<div style='padding: 0; margin:0; font-size: 1rem;font-family: Arial, Helvetica, sans-serif; max-width: 100%; height: auto;'>
                        <div style='text-align: center;'>
                            <img src='http://womenintech.co.in/images/picone.png' style='max-width: 100%; height:auto;'>
                        </div>
                        <div style='text-align: center;'>
                                <h1 style='text-align: center; padding:10px;'>Thank You !</h1>
                                <a href='http://womenintech.co.in/wit_growth_summit_2019' style='text-align: center;'>Your registration for WiT Growth Summit being held at The Leela, Gurugram on 16th Oct ,2019 (9am to 6pm), has been successfully completed.</a>
                                <p style='text-align: center; padding: 1rem 2rem;line-height: 1.3rem;'>WomenInTech Growth Summit 2019 will witness a squadron of the most celebrated STEM industry professionals on stage.<br>
                                <a href='http://womenintech.co.in/wit_growth_summit_2019'> Click here</a> to find out more about the event and download the agenda.<br> For any further queries, please reach out to us at <a href='https://mail.google.com/mail/?view=cm&fs=1&to=info@womenintech.co.in' target='_blank'> info@womenintech.co.in</a></p>
                        </div>
                <div style='text-align: center;'>
                <img src='http://womenintech.co.in/images/picthree.png' style='max-width: 100%; height:auto;'>
                </div>
                <div style='text-align: center;'>
                <img src='http://womenintech.co.in/images/pictwo.png' style='max-width: 100%; height:auto;'>
                </div>
                </div>";
                sendMail::classBooked($email,$body);
                
            echo json_encode($response);
          exit;
          }
          
        }else{
          $response = array('success'=>'fail', 'message'=>'Please register yourself for the event before booking classes');
          echo json_encode($response);
          exit;
        }
        
      }
      }
      

      
    }
    
    
    
    
    
    
    
    
    if(isset($_POST["sponsorClassRegister"])){
      $email= $_POST["email"];
      if(!$_POST['selectedClass']){
          
    $checkSponsorDeligatePaymentStatus=catalogOperations::checkSponsorDeligatePaymentStatus($email);
    if($checkSponsorDeligatePaymentStatus){
         $response = array('success'=>'true', 'message'=>'Your registration for wit growth summit is  succesful');
        
                echo json_encode($response);
                exit;
    }else{
        $response = array('success'=>'fail', 'message'=>'Please register yourself for the event before booking classes');
          echo json_encode($response);
          exit;
    }
                
               
      }else{
          
          $selectedClass= $_POST["selectedClass"];
      $tempName = $_POST['tempName'];
      
     
         
          $checkSponsorDeligatePaymentStatus=catalogOperations::checkSponsorDeligatePaymentStatus($email);
     
          $checkDeligatePaymentStatus=catalogOperations::checkDeligatePaymentStatus($email);
      
      

      

      $checkDeligateVlassesBookedStatus=catalogOperations::checkDeligateVlassesBookedStatus($email);

      if($checkDeligateVlassesBookedStatus){
        $response = array('success'=>'fail', 'message'=>'You already booked classes');
          echo json_encode($response);
          exit;
      }else{

        if($checkDeligatePaymentStatus||$checkSponsorDeligatePaymentStatus){
       
          $selectedClassString=implode(',',$selectedClass);
          $witMasterClassesBooking=catalogOperations::witMasterClassesBooking($email,$selectedClassString);
  
          if($witMasterClassesBooking){
              foreach($tempName as $class){
                $updateCount=catalogOperations::updateCount($class);
              }
            $response = array('success'=>'true', 'message'=>'Classes booked succesfully');
            
            echo json_encode($response);
          exit;
          }
          
        }else{
          $response = array('success'=>'fail', 'message'=>'Please register yourself for the event before booking classes');
          echo json_encode($response);
          exit;
        }
        
      }
      }
      

      
    }
  }
}

?>