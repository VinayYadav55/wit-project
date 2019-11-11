<?php

	class logInStatus{

		public static function isLoggedIn(){
            if(isset($_SESSION['userDetails']['id'])){
                return true;
            }else{
                return false;
            }
        }

        public static function isEmployeerLoggedIn(){
            if(isset($_SESSION['companySession']['id'])){
                return true;
            }else{
                return false;
            }
        }

        public static function isVipananLoggedIn(){
            if(isset($_SESSION['vipananSession']['id'])){
                return true;
            }else{
                return false;
            }
        }

        public static function isWitLoggedIn(){
            if(isset($_SESSION['witSession']['email_id'])){
                return true;
            }else{
                return false;
            }
        }
		
	}

?>
